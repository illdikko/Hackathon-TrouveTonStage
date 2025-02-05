<?php
use App\Http\Controllers\MetierController;
?>

<form action="/create-offer" method="post">
    @csrf
    <div class="input-group">
        <input type="text" name="label" placeholder="label" id="label">
    </div>
    <div class="input-group">
        <input type="text" name="contenu" id="contenu">
    </div>
    <div class="input-group">
        <input type="checkbox" name="remuneration" id="remuneration" value="0">
    </div>
    <div class="input-group">
        <select name="metier_id" id="metier_id">
            @foreach (MetierController::getMetier() as $metier)
                <option value="{{ $metier->id }}">{{ $metier->label }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Creer annonce</button>
</form>
