<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {

        $galleries = Gallery::query()

            ->orderBy('image_date', 'desc')
            ->paginate(10); 

        return view('warkop.gallery.index', compact('galleries'));
    }

    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();

        $galleries = Gallery::where('slug', '!=', $slug)  
            ->get();  


        return view('warkop.gallery.show', compact('gallery', 'galleries'));
    }
}
