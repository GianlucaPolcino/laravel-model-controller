<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageMovies extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
}
