<?php

namespace App\Http\Controllers;

use App\Models\Pole;
use Illuminate\Http\Request;

class PoleController extends Controller
{
    public function getPole() {
        $data = Pole::with('referent')->get();
        return $data;
    }
}
