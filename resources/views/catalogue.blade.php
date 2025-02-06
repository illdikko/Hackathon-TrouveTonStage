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
<div class="annonce-list d-flex align-items-center flex-column">

    @foreach ($annonces as $annonce)
        @include('partials.carte-annonce', $annonce)
    @endforeach
    @include('partials.footer')
</div>

<script src="{{ asset('js/search.js') }}"></script>
