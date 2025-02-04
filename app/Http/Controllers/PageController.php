<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function catalogue() {
        return view('catalogue');
    }

    public function offer() {
        return view('offer');
    }

    public function contact() {
        return view('contact-form');
    }
}
