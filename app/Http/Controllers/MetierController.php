<?php

namespace App\Http\Controllers;

use App\Models\Metier;
use Illuminate\Http\Request;

class MetierController extends Controller
{
    public function getMetier() {
        $data = Metier::with('referent')->get();
        return $data;
    }
}
