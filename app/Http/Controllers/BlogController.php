<?php
// app/Http/Controllers/BlogController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $articles = Article::published()
                          ->latest()
                          ->paginate(9); // 9 artikel per halaman

        return view('blog.index', compact('articles'));
    }

    // Menampilkan detail artikel berdasarkan slug
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
                         ->published()
                         ->firstOrFail();

        // Artikel terkait berdasarkan kategori
        $relatedArticles = Article::where('category', $article->category)
                                 ->where('id', '!=', $article->id)
                                 ->published()
                                 ->latest()
                                 ->take(3)
                                 ->get();

        return view('blog.show', compact('article', 'relatedArticles'));
    }

    // Filter berdasarkan kategori
    public function category($category)
    {
        $articles = Article::where('category', $category)
                          ->published()
                          ->latest()
                          ->paginate(9);

        return view('blog.category', compact('articles', 'category'));
    }

}
