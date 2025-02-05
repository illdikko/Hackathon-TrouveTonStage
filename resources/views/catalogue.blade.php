<?php
use App\Http\Controllers\AnnonceController;

$annonces = AnnonceController::getAnnonce();

?>
@include('partials.header')

<input type="search" id="search-bar" placeholder="Rechercher...">
@foreach ($annonces as $annonce)
    @include('partials.carte-annonce', $annonce)
@endforeach

@include('footer')
