<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <link rel="stylesheet" href="src\styles\library_page.css">
</head>

<body>
<main>
    <div class="container">
        <div class="heading">
            <h1>Ajouter un jeu à sa bibliothèque</h1>
        </div>
        <form method="post">
            <input type="text" name="recherche_game" placeholder="Rechercher un jeu"/>
            <button class="button_search" name="recherche">
                RECHERCHER
            </button>
        </form>
        </div>
        <div class="games-container">
            <h2>Mes jeux</h2>
            <div class="games">
                <?php foreach ($games as $game) { ?>
                    <div class='game'
                         style="background-image: url('<?php echo htmlspecialchars($game['url_img_jeu']); ?>');">
                        <div class="game-info">
                            <h3><?php echo $game['nom_jeu'] ?></h3>
                            <p><?php echo $game['editeur_jeu'] ?></p>
                            <form method="post">
                                <input type="hidden" name="id_game" value="<?php echo $game['id_jeu'] ?>">
                                <button type="submit" name="ajout">
                                    AJOUTER A LA BIBLIOTHEQUE
                                </button>
                            </form>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
</body>

</html>