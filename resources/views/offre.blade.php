<?php
use App\Http\Controllers\AnnonceController;
use App\Models\Annonce;
$annonce = Annonce::find($id)->get();
?>

@include('partials.header')


<div>
    <h1>{{$annonce->label}}</h1>
    <p>{{$annonce->contenu}}</p>
    <p>{{$annonce->remuneration}}</p>
    <p>{{$annonce->metier->label}}</p>
</div>


<form action="/send-mail" method="post">
    @csrf
    <div class="input-group">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
    </div>
    <input type="email" name="email" placeholder="Adresse mail">
    <div>
        <label for="document">Joindre un CV</label>
        <input type="file" required>
    </div>
    <div>
        <label for="document">Joindre une lettre de motivation</label>
        <input type="file">
    </div>
    <button type="submit">Postuler</button>
</form>

@include('partials.footer')
