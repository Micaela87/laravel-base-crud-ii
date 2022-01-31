<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class HomeController extends Controller
{
    public function renderHome() {
        return view('home', ['comics' => Comic::all()]);
    }

    public function show($id) {
        return view('comics', ['comic' => Comic::findOrFail($id)]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        
        $data = $request -> validate([
            'title' => 'required|unique:comics|max:255',
            'author' => 'required|max:255',
            'release_date' => 'required|date',
            'pages' => 'required|numeric|max:255'
        ]);

        $newMovie = Comic::create($data);

        return redirect() -> route('comic', $newMovie -> id);
    }
}
