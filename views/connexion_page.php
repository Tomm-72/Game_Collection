<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection</title>
    <link rel="stylesheet" href="src\styles\forms.css">
</head>
<body>
    <main>
        <div class="formContainer">
            <div class="formHeading">
                <h2>Se connecter à Game Collection</h2>
            </div>
            <form method="post">
                <div class="inputsContainer">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="inputsContainer">
                    <label for="password">Mot de passe</label>
                    <input class="inputs" type="password" name="password" required>
                </div>
                <input class="button" type="submit" value="Se connecter">
            </form>
            <a href="inscription">S'inscrire</a>
        </div>
    </main>
</body>
</html>