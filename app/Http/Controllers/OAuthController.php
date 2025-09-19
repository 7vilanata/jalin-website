<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OAuthController extends Controller
{
    public function handleCallback(Request $request)
    {
        // Zoho sends the authorization code as 'code'
        $authorizationCode = $request->input('code');

        // Exchange the authorization code for an access token
        // You'll need to make a POST request to Zoho's token endpoint here
        // Example (use Guzzle or cURL to send the request):
        // $response = Http::post('https://accounts.zoho.com/oauth/v2/token', [
        //     'client_id' => '',
        //     'client_secret' => '',
        //     'code' => $authorizationCode,
        //     'redirect_uri' => 'https://generasiraw.org/callback',
        //     'grant_type' => 'authorization_code',
        // ]);

        // Process the response (access token, refresh token, etc.)

        if ($response->successful()) {
            // Extract the access token (and refresh token, if available)
            $data = $response->json();

            // Store the access token and refresh token in the session
            session([
                'zoho_access_token' => $data['access_token'],
                'zoho_refresh_token' => $data['refresh_token'] ?? null, // Store refresh token if available
            ]);

            // Optionally, you can also store the expiration time if Zoho provides that
            session(['zoho_access_token_expires_at' => now()->addSeconds($data['expires_in'])]);

            // Redirect or send a response indicating success
            return redirect('/'); // Example redirect
        } else {
            // Handle error if the request failed
            return response()->json(['error' => 'Failed to get access token'], 400);
        }
    }
}
