<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <link rel="stylesheet" href="src\styles\forms.css">
</head>

<body>
    <main>
        <div>
            <div>
                Ajouter un jeu à sa bibliothèque
            </div>
            <form method="post">
                <input type="text" name="recherche_game" placeholder="Rechercher un jeu"/>
                <button class="button_search" name="recherche">
                    Rechercher
                </button>
            </form>
            <div>
                Mes jeux
            </div>
            <?php foreach ($games as $game) {?>
                <div class='game' style="background-image: url('<?php echo htmlspecialchars($game['url_img_jeu']); ?>');">
                        <div class="game-info">
                            <h3><?php echo $game['nom_jeu']?></h3>
                            <p><?php echo $game['editeur_jeu']?></p>
                        </div>
                        <form method="post" >
                            <input type="hidden" name="id_game" value="<?php echo $game['id_jeu']?>">
                            <button type="submit" name="ajout">
                                AJOUTER A LA BIBLIOTHEQUE
                            </button>
                        </form>
                    </div>
            <?php }?>
        </div>        
    </main>
</body>

</html>