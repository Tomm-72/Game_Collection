<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/classement.css">
    <title>Document</title>
</head>
<body>
    <div class="table-container">
    <table>
            <h1>Classement des temps passés</h1>
            <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Temps passé</th>
                    <th>Jeu favori</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($games as $game) { ?>
                        <tr>
                            <td> <?php echo $game["prenom_utilisateur"] ." ". $game["nom_utilisateur"] ?></td>
                            <td><?php echo $game["nb_heure_jeu"]?>h</td>
                            <td><?php echo getFavoriteUserGame($game["id_utilisateur"])["nom_jeu"] ?></td>
                        </tr>
                    <?php }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>