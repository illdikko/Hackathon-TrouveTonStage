<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une offre</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <select name="referent-metier" id="referent-metier">
        <option value disabled selected>-- selectionner--</option>
        <option value="rgalmisch">Raphaele Galmisch</option>
        <option value="vvandewalle">Valérie Vandewalle</option>
        <option value="fperrot">Floriane Perrot</option>
        <option value="jpacifico">Juan Pacifico y sanchez</option>
    </select>

    <div>
        <label for="nom-entreprise">Nom entreprise</label>
        <input type="text" id="nom-entreprise" required>
    </div>

    <div>
        <label for="secteur-activite">Secteur d'activité</label>
        <input type="text" id="secteur-activite" required>
    </div>

    <div>
        <label for="adresse">Adresse</label>
        <input type="text" id="addresse" required>
    </div>

    <label>
        <input type="checkbox" name="stage" value="remunere">
        Stage rémunéré
    </label>

    <br>

    <label>
        <input type="checkbox" name="stage" value="non-remunere">
        Stage non rémunéré
    </label>

    
    <div>
        <label for="description">Description de l'annonce</label>
        <input type="text" id="description" required>
    </div>
    
    
    <button type="submit">Publier</button>
</body>
</html>