<?php
use App\Models\Annonce;
use App\Http\Controllers\AnnonceController;

// if (isset($_GET['id'])) {
//     $annonces = AnnonceController::getAnnonceFiltered($_GET['id']);
// } else {
//     $annonces = AnnonceController::getAnnonce();
// }
?>
@include('partials.header')

<input type="search" id="search-string" name="search-string" placeholder="Rechercher...">

{{-- @foreach ($annonces as $annonce) --}}
    {{-- @include('partials.carte-annonce', $annonce) --}}
{{-- @endforeach --}}

<div class="card rounded border-yellow m-3 p-1">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title align-self-center">Stage en entreprise Designer UX/UI</h4>
        <p class="card-text"><strong>Conception d'interfaces utilisateur dans une agence digitale dynamique</strong></p>
        <footer>
            <p class="text-muted mb-0">Raphaële Galmisch</p>
            <p class="mb-0"><small class="text-muted">Bruxelles</small></p>
        </footer>
    </div>
</div>
<div class="card rounded border-yellow m-3 p-1">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title align-self-center">Stagiaire Développeur front-end</h4>
        <p class="card-text"><strong>Intégration au sein d'une équipe de développement web dans une start-up innovante.</strong></p>
        <footer>
            <p class="text-muted mb-0">Raphaële Galmisch</p>
            <p class="mb-0"><small class="text-muted">Quartier Nord, Bruxelles</small></p>
        </footer>
    </div>
</div>
<div class="card rounded border-yellow m-3 p-1">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title align-self-center">Administrateur réseaux et systèmes</h4>
        <p class="card-text"><strong>Gestion et maintenance de l'infrastructure réseau d'une société de services informatiques.</strong></p>
        <footer>
            <p class="text-muted mb-0">Raphaële Galmisch</p>
            <p class="mb-0"><small class="text-muted">Zaventem</small></p>
        </footer>
    </div>
</div>
<div class="card rounded border-yellow m-3 p-1">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title align-self-center">Community Manager</h4>
        <p class="card-text"><strong>Gestion et animation des réseaux sociaux pour une agence de communication dynamique et de ses clients. </strong></p>
        <footer>
            <p class="text-muted mb-0">Raphaële Galmisch</p>
            <p class="mb-0"><small class="text-muted">Ixelles</small></p>
        </footer>
    </div>
</div><div class="card rounded border-yellow m-3 p-1">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title align-self-center">Conseiller en marketing digital</h4>
        <p class="card-text"><strong>Accompagnements des clients dans leur stratégie digitale au sein d'un cabinet de conseil reconnu.</strong></p>
        <footer>
            <p class="text-muted mb-0">Raphaële Galmisch</p>
            <p class="mb-0"><small class="text-muted">Quartier Européen</small></p>
        </footer>
    </div>
</div><div class="card rounded border-yellow m-3 p-1">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title align-self-center">Graphic Designer</h4>
        <p class="card-text"><strong>Création visuelle au sein d'un studio de design créatif travaillant pour des clients internationaux.</strong></p>
        <footer>
            <p class="text-muted mb-0">Raphaële Galmisch</p>
            <p class="mb-0"><small class="text-muted">Saint-Gilles</small></p>
        </footer>
    </div>
</div>
@include('partials.footer')

<script src="{{ asset('js/search.js') }}"></script>
