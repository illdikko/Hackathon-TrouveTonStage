@include('partials.header')

<div class="hstack ps-2 ">
    <img src="back_yellow.png" alt="fleche jaune">
    <h1 class="mt-3 mb-3" style=" color:#0191B6;">Contacts</h1>
</div>
<div class=" mb-3 col-10 mx-auto shadow border border-warning rounded-4 d-flex flex-column align-items-center "
    style="overflow-y: hidden; align-items: center;  ">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2522.018335495536!2d4.316595976095268!3d50.79376877165978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sEFP!5e0!3m2!1sfr!2sbe!4v1738833349900!5m2!1sfr!2sbe"
        width="360" height="auto" style="border:-4 ;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="  mx-auto"></iframe>
</div>


<div class="container">

    <!-- <p>Remplissez le formulaire ci-dessous pour nous contacter.</p>-->
    <form class="col-11 mx-auto border-light " action="/envoi" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 hstack gap-2 rounded-5 ">

            <input type="text" class="form-control rounded-4 "style="border-color:#00c3de;" id="name"
                name="name" placeholder="Nom" required>
            <input type="text" class="form-control rounded-4 "style="border-color:#00c3de;" id="surname"
                name="surname" placeholder="Prénom" required>


        </div>

        <div class="mb-3">

            <input type="email" class="form-control rounded-4" style="border-color:#00c3de;" id="email"
                name="email" placeholder="Adresse mail" required>
        </div>
        <select class=" form-select mb-3 col-12 rounded-4" style="border-color:#00c3de;" name="rdv" id="rdv">
            <option value disabled selected> -- selectionner -- </option>
            <option value="info">Information</option>
            <option value="rdv">RDV</option>

        </select>

        <div class="mb-3">
            <textarea class="form-control rounded-4 " style="border-color:#00c3de;" id="message" name="message" rows="4"
                placeholder="Message..." required></textarea>
        </div>

        <div class="">
            <button class="btn mb-3 rounded-5" style="background-color:#0191B6;">
                Joindre un fichier
            </button>
            <input type="file" id="fileInput" class="d-none mb-3 ">
            <button type="submit" class="btn mb-3 btn-warning rounded-5 float-end ">Envoyer</button>
        </div>
        <div>
            <h4 class="" style="color: #0191B6;">Personnes de contact</h4>
        </div>
    </form>
    <div class=" col-11 mx-auto container border border-warning p-3 rounded-4 mb-3">
        <div class="hstack">
            <img class="ps-3 w-25" src="Ellipse 1.png" alt="icon photo profil">
            <div class=" mx-auto text-center">
                <p class="m-1">Raphaele Galmisch</p>
                <p class="m-1">rgalmisch@efp.be</p>
                <p class="m-1">023708606</p>
            </div>
        </div>
    </div>

    <!--contact-Valérie Vandewalle-->
    <div class=" col-11 mx-auto border border-warning p-3 rounded-4 mb-3">
        <div class="hstack">
            <img  class="ps-3 w-25" src="Ellipse 1.png" alt="icon photo profil">
            <div class="mx-auto text-center">
                <p class="m-1">Valérie Vandewalle</p>
                <p class="m-1">vvandewalle@efp.be</p>
                <p class="m-1">023708571</p>
            </div>
        </div>
    </div>

    <!--contact-Floriane Perrot-->
    <div class=" col-11 mx-auto border border-warning p-3 rounded-4 mb-3">
        <div class="hstack">
            <img  class="ps-3 w-25" src="Ellipse 1.png" alt="icon photo profil">
            <div class="mx-auto text-center">
                <p class="m-1">Floriane Perrot</p>
                <p class="m-1">fperrot@efp.be</p>
                <p class="m-1">023708541</p>
            </div>
        </div>
    </div>
    <!--contact-Juan PAfico Y Sanchez-->
    <div class=" col-11 mx-auto border border-warning p-3 rounded-4 mb-3">
        <div class="hstack">
            <img  class="ps-3 w-25" src="Ellipse 1.png" alt="icon photo profil">
            <div class="mx-auto text-center">
                <p class="m-1">Juan Pacifico Y Sanchez</p>
                <p class="m-1">jpacifico@efp.be</p>
                <p class="m-1">023708582</p>
            </div>
        </div>
    </div>




</div>

@include('partials.footer')
