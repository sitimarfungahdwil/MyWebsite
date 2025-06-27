<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::published()
                          ->latest()
                          ->take(3)
                          ->get();

        return view('home', compact('articles'));
    }
}
