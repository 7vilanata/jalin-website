<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\FeatureList;

Route::get('/', function () {
    return view('home');
});

Route::get('/warkop-raw', function () {
    return view('warkop');
});
Route::get('/raw-league', function () {
    return view('comingsoon');
});
Route::get('/raw-fest', function () {
    return view('comingsoon');
});

Route::get('/parents', function () {
    return view('parents');
});
Route::get('/explore', function () {
    return view('comingsoon');
});
Route::get('/explore/magazine', function () {
    return view('comingsoon');
});
Route::get('/explore/quiz', function () {
    return view('comingsoon');
});
Route::get('/explore/article', function () {
    return view('article');
});

Route::get('/contact-us', function () {
    return view('comingsoon');
});


