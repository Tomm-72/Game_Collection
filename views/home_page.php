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
        <div id="hero">
            <div id="cover"></div>
            <div id="text-container">
                <p>
                    Salut <?php echo $userName?><br>
                    Prêt à ajouter des jeux à ta collection?
                </p>
            </div>
        </div>

        <div id="games-container">
            <div id="heading">
                <p>Mes jeux</p>
            </div>
            <div id="games">
                <?php
                foreach($games as $game){?>
                    <div class='game' style="background-image: url('<?php echo htmlspecialchars($game['url_img_jeu']); ?>');">
                        <div class="game-info">
                            <h3><?php echo $game['nom_jeu']?></h3>
                            <p><?php echo $game['editeur_jeu']?></p>
                            <p><?php echo $game['nb_heure_jeu']?>h</p>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html>