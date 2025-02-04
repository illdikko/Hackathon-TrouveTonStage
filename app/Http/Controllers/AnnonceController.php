<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function getAnnonce() {
        $data = Annonce::get();
        return $data;
    }

    public function createAnnonce() {
        $incomingFields = $request->validate(rules: [
            'titre' => ['required'],
            'contenu' => ['required'],
            'metier-id' => ['required'],
        ]);

        $incomingFields['contact_id'] = Auth::user()->id;
        $incomingFields['contact_email'] = Auth::user()->email;
        $incomingFields['contact_telephone'] = Auth::user()->phone;

        Annonce::create($incomingFields);

        return redirect('/');
    }
}
