    <p>Ici y aura l'annonce</p>

    <div>
        <h2>
            Lorem, ipsum dolor.
        </h2>
    </div>

    <div>
        <label for="nom">Nom </label>
        <input type="text" id="nom" required>
    </div>

    <div>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" required>
    </div>

    <div>
        <label for="email">Adresse mail</label>
        <input type="email" id="email" required>
    </div>
    
    
    <div>
        <label for="document">Joindre un CV</label>
        <input type="file" required>
    </div>

    <!--Lettre de motivation pas required car pas necessairement obligatoire-->
    <div>
        <label for="document">Joindre une lettre de motivation</label>
        <input type="file">
    </div>



    <form>
        <div class="input-group">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prénom">
        </div>
        <input type="email" name="email" placeholder="Adresse mail">
        <div class="file-upload">
            <label for="cv-motivation">Glisser son CV et sa lettre de motivation</label>
            <input type="file" id="cv-motivation" name="cv-motivation" multiple>
        </div>
        <button type="submit">Postuler</button>
    </form>
