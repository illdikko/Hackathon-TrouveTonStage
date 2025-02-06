<?php
use App\Models\Annonce;

$annonces = Annonce::with('metier')->get();

?>

@include('partials.header')

<?php var_dump(session()->get('data')); ?>

@include('partials.footer')
