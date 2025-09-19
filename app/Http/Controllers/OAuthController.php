<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;  // Add the Log facade
use Illuminate\Support\Facades\Cookie;

class OAuthController extends Controller
{
    public function handleCallback(Request $request)
    {
        // Zoho sends the authorization code as 'code'
        $authorizationCode = $request->input('code');
        Log::info('Zoho OAuth callback received. Code: ' . $authorizationCode);
        // Exchange the authorization code for an access token
        // You'll need to make a POST request to Zoho's token endpoint here
        $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
            'client_id' => config('services.zoho.client_id'),
            'client_secret' => config('services.zoho.client_secret'),
            'code' => $authorizationCode,
            'redirect_uri' => 'http://localhost:8000/callback',
            'grant_type' => 'authorization_code',
            'scope' => 'ZohoMail.messages.CREATE'
        ]);

        // dd($response);
        // Process the response (access token, refresh token, etc.)
        if ($response->successful()) {
            $data = $response->json();
            // Store tokens in cookies for 30 days
            $accessToken = $data['access_token'];
            $refreshToken = $data['refresh_token'] ?? null;
            $expiresAt = $data['expires_in'] / 60;

            // Set the access token cookie (expires in 30 days)
            Cookie::queue('zoho_access_token', $accessToken, $expiresAt);
            Cookie::queue('zoho_refresh_token', $refreshToken, 43200); // 30 days

            // Set the expiration time of the access token
            // Cookie::queue('zoho_access_token_expires_at', $expiresAt->toDateTimeString(), 43200);


            return response()->json([
                'access_token' => $accessToken,
                'refresh_token' => $refreshToken,
            ]); // Redirect after successful OAuth authentication
        } else {
            // Log::error('Zoho OAuth failed: ' . $response->body());
            return response()->json(['error' => 'Failed to get access token'], 400);
        }
    }
}
