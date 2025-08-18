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

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/parents', function () {
    return view('parents');
});
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/explore/magazine', function () {
    return view('explore.magazine');
});
Route::get('/explore/quiz', function () {
    return view('explore.quiz');
});
Route::get('/explore/article', function () {
    return view('explore.article');
});



