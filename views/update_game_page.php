<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour jeu</title>
    <link rel="stylesheet" href="src\styles\update_game_page.css">
</head>

<body>
    <main>
        <div class="flex_space_around">
            <div class="left">
                <div class="heading">
                    <h1><?php echo $game['nom_jeu'] ?></h1>
                </div>
                <div class="petit_text">
                    <?php echo $game['desc_jeu'] ?>
                </div>
                <div class="petit_text">
                    Temps passé : <?php echo $game['nb_heure_jeu'] ?> h
                </div>
                <div class="heading">
                    <h1>Ajouter du temps passé sur le jeu</h1>
                </div>
                <form method="post" class="form">
                    <div>
                        Temps passé sur le jeu
                    </div>
                    <input type="number" name="heure" min="0" required>
                    <button type="submit" name="ajouter">Ajouter</button>
                </form>
                <form method="post">
                    <button type="submit" name="supprimer">Supprimer le jeu de ma bibliothèque</button>
                </form>
            </div>
            <div class="right">
                <img src="<?php echo $game['url_img_jeu'] ?>" class="img">
            </div>
        </div>
    </main>
</body>

</html>