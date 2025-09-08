<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Schedule;
use App\Models\WarkopLocation;
use Illuminate\Http\Request;

class WarkopController extends Controller
{
    public function index(Request $request)
    {
        $location_list = [
            'Jakarta Utara' => 'Jakarta Utara',
            'Jakarta Barat' => 'Jakarta Barat',
            'Jakarta Pusat' => 'Jakarta Pusat',
            'Jakarta Timur' => 'Jakarta Timur',
            'Jakarta Selatan' => 'Jakarta Selatan',
        ];

        $galleries = Gallery::limit(5)->get();
        $schedules = Schedule::limit(4)->get();
        $warloc = WarkopLocation::get();
        return view('warkop.index', compact('galleries','schedules','location_list', 'warloc'));
    }
}
