<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class RawVideosController extends Controller
{
    public function index(Request $request)
    {
        $videos = Videos::query()
            ->where('is_published', true)
            ->orderBy('publish_date', 'desc')
            ->paginate(9);

        return view('explore.videos.index', compact('videos'));
    }
}
