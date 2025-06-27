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

Route::get('/blog', function () {
    $articles = Article::published()->latest()->paginate(9);
    return view('pages.blog', compact('articles'));
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->published()->firstOrFail();
    $relatedArticles = Article::where('category', $article->category)
                             ->where('id', '!=', $article->id)
                             ->published()
                             ->latest()
                             ->take(3)
                             ->get();
    return view('pages.blog-detail', compact('article', 'relatedArticles'));
})->name('blog.show');
