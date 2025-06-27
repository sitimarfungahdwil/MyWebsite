<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireMeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'selected_date' => 'required|date',
            'selected_time' => 'required|string',
        ]);

        // Simpan data atau kirim email
        // HireRequest::create($request->all());

        return redirect()->back()->with('success', 'Your hire request has been submitted successfully!');
    }
}

