<?php

// app/Http/Controllers/ArticleController.php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // Handle search functionality if needed
        $search = $request->input('search', '');

        $articles = Article::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10); // You can change the pagination value if needed

        return view('explore.articles.index', compact('articles', 'search'));
    }

    // Show a single article's details
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('explore.articles.show', compact('article'));
    }
}
