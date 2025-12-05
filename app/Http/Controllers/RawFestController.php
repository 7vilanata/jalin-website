<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SponsorAndPresenter;

class RawFestController extends Controller
{
    public function index(Request $request)
    {
        $sponsors = SponsorAndPresenter::where('is_published', true)->where('role', 'sponsor')->get();
        $presenters = SponsorAndPresenter::where('is_published', true)->where('role', 'presenter')->get();
        return view('rawfest.index',compact('sponsors', 'presenters'));
    }
}
