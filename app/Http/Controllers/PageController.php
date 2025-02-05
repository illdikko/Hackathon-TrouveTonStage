<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('catalogue');
    }

    public function catalogue() {
        return view('catalogue');
    }

    public function contactForm() {
        return view('contact-form');
    }

    public function mySpace() {
        return view('mon-espace');
    }

    public function createOfferForm() {
        return view('form-offre');
    }

    public function jobibox() {
        return view('jobibox');
    }

    public function applyOfferForm() {
        return view('offre');
    }

    public function toolBox() {
        return view('fichesExp');
    }

    public function faq() {
        return view('faq');
    }

    public function confirmation() {
        return view('confirmation');
    }
}
