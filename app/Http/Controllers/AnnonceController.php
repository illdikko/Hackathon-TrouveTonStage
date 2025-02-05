<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    static public function getAnnonce() {
        $data = Annonce::with('metier')->get();
        return $data;
    }

    public function deleteAnnonce($id) {
        Annonce::find($id)->delete();
    }

    public function createAnnonce(Request $request) {
        $incomingFields = $request->validate(rules: [
            'label' => ['required', 'min:3'],
            'contenu' => ['required'],
            'remuneration' => ['required'],
            'metier_id' => ['required'],
        ]);

        $incomingFields['remuneration'] = $request->input('remuneration', 1);

        Annonce::create($incomingFields);

        return redirect('/')->with('success', 'Annonce crée!');
    }
}
