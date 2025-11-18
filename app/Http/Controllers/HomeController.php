<?php

namespace App\Http\Controllers;

use App\Models\HomeCarousel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $warkopCarousel = HomeCarousel::where('is_published', true)
        ->where('type_event','warkop')
        ->orderBy('sort_order')
        ->get();
        $rawleagueCarousel = HomeCarousel::where('is_published', true)
        ->where('type_event','rawleague')
        ->orderBy('sort_order')
        ->get();
        $rawfestCarousel = HomeCarousel::where('is_published', true)
        ->where('type_event','rawfest')
        ->orderBy('sort_order')
        ->get();

        return view('home', compact('warkopCarousel','rawleagueCarousel','rawfestCarousel'));
    }
}
