<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiremeController;

Route::get('/', function () {
    // Ambil artikel untuk ditampilkan di landing page
    $articles = Article::published()->latest()->take(3)->get();
    return view('pages.landing', compact('articles'));
});

// Tambahkan route baru ini:
Route::get('/hireme', function () {
    return view('pages.hireme');
})->name('hireme.index');

Route::post('/hire-me', function () {
    // Sementara return success message
    return back()->with('success', 'Form submitted successfully!');
})->name('hireme.store');

// UPDATE ROUTE INI - Tambahkan search dan filter functionality
Route::get('/blog', function () {
    $query = Article::published()->latest();

    // Handle search
    if (request('search')) {
        $searchTerm = request('search');
        $query->where(function($q) use ($searchTerm) {
            $q->where('title', 'like', '%' . $searchTerm . '%')
              ->orWhere('excerpt', 'like', '%' . $searchTerm . '%')
              ->orWhere('content', 'like', '%' . $searchTerm . '%');
        });
    }

    // Handle category filter
    if (request('category')) {
        $query->where('category', request('category'));
    }

    $articles = $query->paginate(9);

    // Append query parameters to pagination links
    $articles->appends(request()->query());

    // Get unique categories from database
    $categories = Article::published()
                        ->distinct()
                        ->pluck('category')
                        ->filter() // Remove null values
                        ->sort()
                        ->values();

    return view('pages.blog.index', compact('articles', 'categories'));
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->published()->firstOrFail();
    $relatedArticles = Article::where('category', $article->category)
                             ->where('id', '!=', $article->id)
                             ->published()
                             ->latest()
                             ->take(3)
                             ->get();
    return view('pages.blog.show', compact('article', 'relatedArticles'));
})->name('blog.show');
