<?php
use App\Http\Controllers\AnnonceController;

?>
@foreach (AnnonceController::getAnnonce() as $annonce)
    @include('partials.carte-annonce', $annonce)
@endforeach
