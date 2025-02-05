@include('partials.header')

<h1>Contacts</h1>

<h3>Vous avez rendez-vous?</h3>

<p>Rue de Stalle 292</p>
<p>1180 Uccle</p>

<div> <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2522.018335495536!2d4.316595976458589!3d50.79376877165978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sefp!5e0!3m2!1sfr!2sbe!4v1738680244303!5m2!1sfr!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="container">
    <h2>Formulaire de contact</h2>
    <p>Remplissez le formulaire ci-dessous pour nous contacter.</p>
    <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data">
        @crsf

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="document" class="form-label">Joindre un document</label>
            <input type="file" class="form-control" id="document" name="document">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>

</div>