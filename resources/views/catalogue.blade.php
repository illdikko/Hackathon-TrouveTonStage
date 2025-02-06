<?php
use App\Models\Annonce;
use App\Http\Controllers\AnnonceController;

if (isset($_GET['id'])) {
    $annonces = AnnonceController::getAnnonceFiltered($_GET['id']);
} else {
    $annonces = AnnonceController::getAnnonce();
}
?>
@include('partials.header')

<input type="search" id="search-string" name="search-string" placeholder="Rechercher...">

@foreach ($annonces as $annonce)
    @include('partials.carte-annonce', $annonce)
@endforeach
@include('partials.footer')

<script src="{{ asset('js/search.js') }}"></script>
