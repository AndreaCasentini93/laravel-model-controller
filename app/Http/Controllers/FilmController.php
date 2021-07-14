<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
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

        return view('films', compact('links'));
    }
}
