<?php

namespace App\Http\Controllers;

use App\Models\GalleryRawleague;
use App\Models\SponsorAndPresenter;
use Illuminate\Http\Request;

class RawLeagueController extends Controller
{
   public function index(Request $request)
    {
        $galleries = GalleryRawleague::where('is_published', true)->paginate(6); 
        $sponsors = SponsorAndPresenter::where('is_published', true)->where('role','sponsor')->get();
        $presenters = SponsorAndPresenter::where('is_published', true)->where('role','presenter')->get();

        return view('rawleague.index', compact('galleries','sponsors','presenters'));
    }
    
}
