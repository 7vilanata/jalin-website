<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
   public function index(Request $request)
    {

        $quizzes = Quiz::query()
            ->where('is_published', true)
            ->orderBy('publish_date', 'desc')
            ->paginate(10); // You can change the pagination value if needed

        return view('explore.quiz.index', compact('quizzes'));
    }
    
}
