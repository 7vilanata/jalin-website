<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\FeatureList;

Route::get('/', function () {
    return view('home');
});
Route::get('/activities', function () {
    return view('comingsoon');
});
Route::get('/about', function () {
    return view('comingsoon');
});
Route::get('/blog', function () {
    return view('comingsoon');
});
Route::get('/contact-us', function () {
    return view('comingsoon');
});

Route::get('/activities/warkop-raw', function () {
    return view('comingsoon');
});
Route::get('/activities/raw-league', function () {
    return view('comingsoon');
});
Route::get('/activities/raw-fest', function () {
    return view('comingsoon');
});

