<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\RawVideosController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\WarkopController;
use App\Http\Livewire\FeatureList;
use App\Livewire\ContactForm;
use Illuminate\Support\Facades\Cookie;

Route::get('/', function () {
    return view('home');
});


Route::get('/raw-league', function () {
    return view('comingsoon');
});
Route::get('/raw-fest', function () {
    return view('comingsoon');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/parents', function () {
    return view('parents');
});

// warkop

Route::prefix('warkop-raw')->group(function () {
    // Add your filter route here under the prefix
    Route::get('/', [WarkopController::class, 'index'])->name('warkop');
    Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('warkop.gallery.show');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('warkop.gallery.index');
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('warkop.schedule.index');
    Route::get('/schedule/{slug}', [ScheduleController::class, 'show'])->name('warkop.schedule.show');
});

// warkop (function filtering)
Route::get('/schedules/filter', [ScheduleController::class, 'filter'])->name('schedules.filter');



// explore
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/explore/raw-videos', [RawVideosController::class, 'index'])->name('explore.videos.index');
Route::get('/explore/quiz', [QuizController::class, 'index'])->name('explore.quiz.index');
Route::get('/explore/articles', [ArticleController::class, 'index'])->name('explore.articles.index');
Route::get('/explore/articles/{slug}', [ArticleController::class, 'show'])->name('explore.articles.show');

Route::get('/callback', [OAuthController::class, 'handleCallback']);

Route::get('/callback', [OAuthController::class, 'handleCallback']);

// Route::get('/get-token', function () {
//     // Retrieve the access token and refresh token from the session
//     $contactForm = new ContactForm();
//     $accessToken = $contactForm->generateAccessToken();
//     $refreshToken = config('services.zoho.refresh_token');


//     // Return the tokens in a structured response
//     return response()->json([
//         'access_token' => $accessToken,
//         'refresh_token' => $refreshToken,
//     ]);
// });
