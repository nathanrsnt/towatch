<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watched;
use App\Models\Movie;

class WatchedController extends Controller
{
    public function index() {
        $watched = Watched::all();
        return view('watched', ['watched' => $watched]);
    }

    public function destroy($id) {
        $return = new Movie();
        $watched = Watched::findOrFail($id);

        $return->nome = $watched->nome;
        $return->save();

        Watched::findOrFail($id)->delete();
        return redirect()->route('watched.index');
    }
}
