<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function getAnnonce() {
        $data = Annonce::with('metier')->get();
        return $data;
    }

    public function deleteAnnonce($id) {
        Annonce::find($id)->delete();
    }

    public function createAnnonce() {
        $incomingFields = $request->validate(rules: [
            'label' => ['required', 'min:3'],
            'description' => ['required'],
            'remun' => ['required'],
            'metier_id' => ['required'],
        ]);

        Annonce::create($incomingFields);

        return redirect('/')->with('success', 'Annonce crée!');
    }
}
