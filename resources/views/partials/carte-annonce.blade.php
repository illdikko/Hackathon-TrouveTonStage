<div class="card rounded border-yellow m-3 p-1 annonce">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title align-self-center">{{ $annonce->label }}</h4>
        <p class="card-text"><strong>{{ $annonce->contenu }}</strong></p>
        <footer>
            <p class="text-muted mb-0">{{ $annonce->metier->referent->getFullName() }}</p>
            <p class="mb-0"><small class="text-muted">{{ $annonce->metier->label }}</small></p>
        </footer>
    </div>
</div>
