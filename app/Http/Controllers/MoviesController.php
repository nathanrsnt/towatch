<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Watched;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        
        return view('welcome', ['movies' => $movies]);
    }

    public function store (Request $req) 
    {
        $movies = new Movie();
        $movies->nome = $req->nome;
        $movies->save();

        return redirect()->route('movies.index');
    }

    public function destroy($id)
    {
        $watched = new Watched();
        $moveMovie = Movie::findOrFail($id);

        $watched->nome = $moveMovie->nome;
        $watched->save();
        
        Movie::findOrFail($id)->delete();
        return redirect()->route('movies.index');
    }
}
