<?php
use App\Http\Controllers\AnnonceController;

?>

{{-- @include('header') --}}

<h1>Catalogue</h1>
@foreach (AnnonceController::getAnnonce() as $annonce)
    <div>
        <h2>{{ $annonce->label }}</h2>
        <p>{{ $annonce->contenu }}</p>
        <p>{{ $annonce->metier->label }}</p>
        <h2>{{ $annonce->metier->referent->prenom }}</h2>
    </div>
@endforeach
