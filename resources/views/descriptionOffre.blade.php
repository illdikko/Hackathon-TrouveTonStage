<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Candidature</title>
</head>
<body>
    <nav>
        <div class="logo"></div>
        <div class="menu">
            <div class="hamburger-menu"></div>
            <button class="user-button">U</button>
        </div>
    </nav>

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
</body>
</html>
