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
                    $games = getUserGames();
                    foreach ($games as $game) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars(strtoupper($game['nom_utilisateur'])) . ' ' . htmlspecialchars($game['prenom_utilisateur']) . "</td>";
                        echo "<td>" . htmlspecialchars($game['nb_heure_jeu']) . "h</td>";
                        echo "<td>" . htmlspecialchars($game['nom_jeu']) . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>