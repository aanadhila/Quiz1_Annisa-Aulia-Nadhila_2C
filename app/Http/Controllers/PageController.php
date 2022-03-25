<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('index', ['title' => '- Home Page']);
    }

    public function about() {
        return view('tentang', ['title' => '- About Page']);
    }
}