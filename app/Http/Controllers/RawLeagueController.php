<?php

namespace App\Http\Controllers;

use App\Models\GalleryRawleague;
use App\Models\SponsorAndPresenter;
use App\Models\Tournament;
use Illuminate\Http\Request;

class RawLeagueController extends Controller
{
    public function index(Request $request)
    {
        $galleries = GalleryRawleague::where('is_published', true)
            ->orderBy('image_date', 'desc')
            ->paginate(6);
        $sponsors = SponsorAndPresenter::where('is_published', true)->where('role', 'sponsor')->get();
        $presenters = SponsorAndPresenter::where('is_published', true)->where('role', 'presenter')->get();

        return view('rawleague.index', compact('galleries', 'sponsors', 'presenters'));
    }
    public function leaderboard(Request $request)
    {

        $tournaments = Tournament::with('teams')->get();
        return view('rawleague.leaderboard', compact('tournaments'));
    }
}
