<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/styles.css">
    <title>Page création jeu</title>
</head>

<body>
    <main>
        <div class="formContainer">
            <div class="formHeading">
                <div class="heading_text">
                    Ajouter un jeu à sa bibliothèque
                </div>
            </div>
            <div class="desc">
                <p class="desc_text">
                    Le jeu que vous souhaiter ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouter a votre bibliothèque !
                </p>
            </div>
            <form method="post" class="form">
                <div class="inputsContainer">
                    Nom du jeu
                    <input type="text" name="nom" placeholder="Nom du jeu" required>
                </div>
                <div class="inputsContainer">
                    Editeur du jeu
                    <input type="text" name="editeur" placeholder="Editeur du jeu" required>
                </div>
                <div class="inputsContainer">
                    Sortie du jeu
                    <input type="date" name="date" required>
                </div>
                <div class="inputsContainer">
                    Plateformes
                    <input type="checkbox" name="ps">
                    Playstation
                    <input type="checkbox" name="xbox">
                    Xbox
                    <input type="checkbox" name="nintendo">
                    Nintendo
                    <input type="checkbox" name="pc">
                    PC
                </div>
                <div class="inputsContainer">
                    Description du jeu
                    <input type="text" name="desc" maxlength="255">
                </div>
                <div class="inputsContainer">
                    URL de la cover
                    <input type="url" name="url_cover" required>
                </div>
                <div class="inputsContainer">
                    URL du site
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