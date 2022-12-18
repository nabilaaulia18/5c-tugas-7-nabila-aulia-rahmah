<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;
use App\Genre;
use App\Models\Film as ModelsFilm;
use App\Models\Genre as ModelsGenre;

class FilmController extends Controller
{
    public function index()
    {
        $film = ModelsFilm::get();
        return view('film', ['film' => $film]);
    }

    public function store(Request $request)
    {
        $post = new ModelsFilm();

        $post->title = $request->title;
        $post->save();

        // $post2 = DB::insert(‘insert into film_genre (id, title, content) values (?, ?, ?)’, [1, ‘Jakarta today’, ‘Jakarta lockdown’]);

        $film = ModelsFilm::get();
        return view('film', compact('film'));
    }
}
