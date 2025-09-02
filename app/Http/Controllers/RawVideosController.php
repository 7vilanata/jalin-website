<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RawVideosController extends Controller
{
    public function index(Request $request)
    {
        return view('explore.videos.index');
    }
}
