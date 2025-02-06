<?php use App\Http\Controllers\MetierController; ?>
@include('partials.header')

<form action="/set-offer" method="post">
    @csrf
    <div class="input-group">
        <select name="metier_id" id="metier_id">
            @foreach (MetierController::getMetier() as $metier)
                <option value="{{ $metier->id }}">{{ $metier->label }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="label">Nom entreprise</label>
        <input type="text" name="label" id="label">
    </div>

    <div>
        <label for="contenu">Description de l'annonce</label>
        <input type="text" name="contenu" id="contenu">
    </div>

    <label>
        <input type="checkbox" id="remuneration" name="remuneration">
        Stage rémunéré
    </label>

    <button type="submit">Publier</button>
</form>