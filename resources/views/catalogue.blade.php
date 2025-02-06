<?php
use App\Models\Annonce;
use App\Http\Controllers\AnnonceController;

// $annonces = Annonce::with('metier')->get();
// $annonces = Annonce::with('metier')->get();
$annonces = AnnonceController::getAnnonceFiltered($_GET['id']);
?>
@include('partials.header')

<input type="search" id="search-string" name="search-string" placeholder="Rechercher...">

@foreach ($annonces as $annonce)
    @include('partials.carte-annonce', $annonce)
@endforeach
@include('partials.footer')

<script src="{{ asset('js/search.js') }}"></script>
