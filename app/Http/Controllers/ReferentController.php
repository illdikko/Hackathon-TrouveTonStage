<?php

namespace App\Http\Controllers;

use App\Models\Referent;
use Illuminate\Http\Request;

class ReferentController extends Controller
{
    public function getReferent() {
        $data = Referent::get();
        return $data;
    }
}
