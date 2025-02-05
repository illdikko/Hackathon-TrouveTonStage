<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $annonce->label }}</h4>
        <p class="card-text">{{ $annonce->contenu }}</p>
        <p class="italic">{{ $annonce->metier->referent->getFullName() }}</p>
        <span class="text-muted">{{ $annonce->metier->label }}</span>
    </div>
</div>
