<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GameCollection</title>
    <link rel="stylesheet" href="src/styles/edit_user_profile.css">
</head>
<body>
    <div class="main">
        <div class="container">

            <div class="heading">
                <p>Mon profil</p>
            </div>

            <div class="form">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" value="<?php echo $user["nom_utilisateur"]?>">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" value="<?php echo $user["prenom_utilisateur"]?>">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" value="<?php echo $user["email_utilisateur"]?>">
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
                    <button type="submit">Modifier</button>
                </div>
            </div>

            <div class="deleteAccount">
                <button type="submit">Supprimer mon compte</button>
            </div>

            <div class="logout">
                <button type="submit">Se déconnecter</button>
            </div>
        </div>
    </div>
</body>