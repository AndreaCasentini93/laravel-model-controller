<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $links = [
            [
                "text" => "Home",
                "url" => "home"
            ],
            [
                "text" => "Film",
                "url" => "films"
            ],
            [
                "text" => "Serie TV",
                "url" => "tv-series"
            ]
        ];

        $movies = Movie::all();

        return view('home', compact('links', 'movies'));
    }
}
