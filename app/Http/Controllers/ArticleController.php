<?php

// app/Http/Controllers/ArticleController.php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {

        $articles = Article::query()
            ->where('is_published', true)
            ->orderBy('publish_date', 'desc')
            ->paginate(10); // You can change the pagination value if needed

        return view('explore.articles.index', compact('articles'));
    }

    // Show a single article's details
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->content = preg_replace('/<figcaption[^>]*>.*?<\/figcaption>/is', '', $article->content);

        $articles = Article::where('slug', '!=', $slug)  // Ensure the slug is not equal to the current article
            ->limit(4)  // Limit the number of articles to 4
            ->get();  // Get the articles


        return view('explore.articles.show', compact('article', 'articles'));
    }
}
