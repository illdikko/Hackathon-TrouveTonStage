<?php use App\Http\Controllers\MetierController; ?>

<form action="/set-offer" method="post">

    @include('partials.header')


    <form action="/create-offer" method="post">

        <div class="input-group">
            <select name="metier_id" id="metier_id">
                @foreach (MetierController::getMetier() as $metier)
                    <option value="{{ $metier->id }}">{{ $metier->label }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="label">Nom entreprise</label>
            <input type="text" id="label" required>
        </div>

        <div>
            <label for="description">Description de l'annonce</label>
            <input type="text" id="contenu" required>
        </div>

        <label>
            <input type="checkbox" name="stage" value="true">
            Stage rémunéré
        </label>

        <button type="submit">Publier</button>
    </form>
