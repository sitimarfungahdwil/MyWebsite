<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiremeController;

Route::get('/', function () {
    return view('pages.landing');
});

// Tambahkan route baru ini:
Route::get('/hireme', function () {
    return view('pages.hireme');
})->name('hireme.index');

Route::post('/hire-me', function () {
    // Sementara return success message
    return back()->with('success', 'Form submitted successfully!');
})->name('hireme.store');
