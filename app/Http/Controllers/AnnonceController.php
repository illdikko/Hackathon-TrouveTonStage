<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    static public function getAnnonce()
    {
        $data = Annonce::with('metier')->get();
        return $data;
    }

    public function deleteAnnonce($id)
    {
        Annonce::find($id)->delete();
    }

    public function setAnnonce(Request $request)
    {
        $incomingFields = $request->validate(rules: [
            'label' => ['required', 'min:3'],
            'metier_id' => ['required'],
            'contenu' => ['required'],
            'remuneration' => ['required'],
        ]);

        $incomingFields['remuneration'] = $request->input('remuneration', 1);

        Annonce::create($incomingFields);

        return redirect('/')->with('success', 'Annonce crée!');
    }
}
