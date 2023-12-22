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
        <div class="panelContainer">
            <div class="formContainer">
                <heading class="formHeading">
                    <h2>Se connecter à Game Collection</h2>
                </heading>
            <form action="connexion.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
                <input class="button" type="submit" value="Se connecter">
            </form>
            <a href="inscription_page.php">S'inscrire</a>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>