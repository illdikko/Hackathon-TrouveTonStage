<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description offre</title>
    <link rel="stylesheet" href="#">
</head>
<body>
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

    <button type="submit">Postuler</button>

</body>
</html>