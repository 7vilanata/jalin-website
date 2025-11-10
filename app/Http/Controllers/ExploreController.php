<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Quiz;
use App\Models\Videos;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {

        $articles = Article::where('is_published', true)  // Filter published articles
            ->limit(4)
            ->get();

        $quizzes = Quiz::where('is_published', true)  // Filter published quizzes
            ->limit(4)
            ->get();

        $videos = Videos::where('is_published', true)  // Filter published videos
            ->limit(3)
            ->get();


        return view('explore.index', compact('articles', 'quizzes', 'videos'));
    }
}
