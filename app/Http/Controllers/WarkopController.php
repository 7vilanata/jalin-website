<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Schedule;
use Illuminate\Http\Request;

class WarkopController extends Controller
{
    public function index(Request $request)
    {

        $galleries = Gallery::limit(5)->get();
        $schedules = Schedule::limit(4)->get();
        return view('warkop.index', compact('galleries','schedules'));
    }
}
