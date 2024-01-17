<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/add_game_form_page.css">
    <title>Page création jeu</title>
</head>

<body>
<main>
    <div class="container">
        <h1>Ajouter un jeu à sa bibliothèque</h1>
        <p class="desc">
            Le jeu que vous souhaiter ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouter
            a votre bibliothèque !
        </p>
        <form method="post" class="form">
            <div class="inputsContainer">
                <p class="input-name">Nom du jeu</p>
                <input type="text" name="nom" placeholder="Nom du jeu" required>
            </div>
            <div class="inputsContainer">
                <p class="input-name">Editeur du jeu</p>
                <input type="text" name="editeur" placeholder="Editeur du jeu" required>
            </div>
            <div class="inputsContainer">
                <p class="input-name">Sortie du jeu</p>
                <input type="date" name="date" required>
            </div>
            <div class="inputsContainer">
                <p class="input-name">Plateformes</p>
                <input type="checkbox" name="ps">
                <p class="checkbox-value">Playstation</p>
                <input type="checkbox" name="xbox">
                <p class="checkbox-value">Xbox</p>
                <input type="checkbox" name="nintendo">
                <p class="checkbox-value">Nintendo</p>
                <input type="checkbox" name="pc">
                <p class="checkbox-value">PC</p>
            </div>
            <div class="inputsContainer">
                <p class="input-name">Description du jeu</p>
                <input type="text" name="desc" maxlength="255">
            </div>
            <div class="inputsContainer">
                <p class="input-name">URL de la cover</p>
                <input type="url" name="url_cover" required>
            </div>
            <div class="inputsContainer">
                <p class="input-name">URL du site</p>
                <input type="url" name="url_site" required>
            </div>
            <div class="button">
                <button type="submit" name="ajout">AJOUTER LE JEU</button>
            </div>
        </form>
    </div>
</main>
</body>

</html>