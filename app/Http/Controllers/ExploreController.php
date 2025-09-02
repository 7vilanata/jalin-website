<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Magazine;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
     public function index()
    {
 
        $articles = Article::limit(4)->get();  
        $magazines = Magazine::limit(4)->get();  
        $quizzes = Quiz::limit(4)->get();  

        return view('explore.index', compact('articles','quizzes','magazines'));
    }
}
