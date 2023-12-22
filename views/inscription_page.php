<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection</title>
    <link rel="stylesheet" href="..\src\styles\forms.css">
</head>
<body>
    <main>
        <div class="formContainerInscription">
            <div class="formHeading">
                <h2>Inscription</h2>
            </div>
            <form method="post">
                <div class="inputsContainer">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" required>
                </div>
                <div class="inputsContainer">
                    <label for="nom">Prénom :</label>
                    <input type="text" name="prenom" required>
                </div>
                <div class="inputsContainer">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="inputsContainer">
                    <label for="password">Mot de passe :</label>
                    <input class="inputs" type="password" name="password" required>
                </div>
                <div class="inputsContainer">
                    <label for="password">Confirmation du mot de passe :</label>
                    <input class="inputs" type="password" name="passwordConfirmed" required>
                </div>
                <input class="button" type="submit" value="S'inscrire">
            </form>
            <a href="connexion_page.php">Se connecter</a>
        </div>
    </main>
    <footer>
        <p>Game Collection - 2023 - Tous droits réservés</p>
    </footer>
</body>
</html>