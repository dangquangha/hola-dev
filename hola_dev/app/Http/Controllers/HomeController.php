<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = [
            'slider_1.webp',
            'slider_2.webp',
            'slider_3.webp',
        ];

        return view('pages.home.index')->with([
            'slides' => $slides
        ]);
    }
}
