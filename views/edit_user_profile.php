<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GameCollection</title>
    <link rel="stylesheet" href="src/styles/editUserPage.css">
</head>
<body>
<div class="main">
    <div class="container">

        <div class="heading">
            <h1>Mon profil</h1>
        </div>
        <form method="POST">
            <div class="form">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" value="<?php echo $userLastName ?>">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" value="<?php echo $userName ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" value="<?php echo $userEmail ?>">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="passwordConfirmed">Confirmer le mot de passe :</label>
                    <input type="password" name="passwordConfirmed" id="passwordConfirmed">
                </div>
                <div class="edit-button">
                    <button type="submit" name="editUser">Modifier</button>
                </div>
            </div>
        </form>

        <form method="POST">
            <div class="mainButtons">
                <button type="submit" name="deleteUser">Supprimer mon compte</button>
            </div>
        </form>

        <form method="POST">
            <div class="mainButtons">
                <button type="submit" name="logout">Se déconnecter</button>
            </div>
        </form>
    </div>
</div>
</body>