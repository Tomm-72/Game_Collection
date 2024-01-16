<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/homepage.css">
    <title>GameCollection</title>
</head>
<body>
<div class="main">
    <div class="hero">
        <div class="text-container">
            <h1>
                Salut <?php echo $userName ?><br>
                Prêt à ajouter des jeux à ta collection?
            </h1>
        </div>
    </div>

    <div class="games-container">
        <h2>Mes jeux</h2>
        <div class="games">
            <?php
            foreach ($games as $game) {
                ?>
                <div class='game'
                     style="background-image: url('<?php echo htmlspecialchars($game['url_img_jeu']); ?>');">
                    <a href="#">
                        <div class="game-info">
                            <h3><?php echo $game['nom_jeu'] ?></h3>
                            <p class="desc-jeu"><?php echo $game['editeur_jeu'] ?></p>
                            <p class="heures-jeu"><?php echo $game['nb_heure_jeu'] ?>h</p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>