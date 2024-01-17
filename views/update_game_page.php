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
    <div class="container">
        <p>
        <h1><?php echo $game['nom_jeu'] ?></h1>
        <p>
            <?php echo $game['desc_jeu'] ?>
        </p>
        <p>
            Temps passé : <?php echo $game['nb_heure_jeu'] ?> h
        <p>
        <h2>Ajouter du temps passé sur le jeu</h2>
        <form method="post" class="form">
            <p>
                Temps passé sur le jeu
            </p>
            <input type="number" name="heure" min="<?php echo $game['nb_heure_jeu'] ?>" required>
            <button type="submit" name="ajouter">Ajouter</button>
        </form>
        <form method="post">
            <button type="submit" name="supprimer">Supprimer le jeu de ma bibliothèque</button>
        </form>
    </div>

    <div style="background: url('<?php echo $game['url_img_jeu'] ?>'); background-repeat: no-repeat; background-size: cover; width: 300px;
            height: 400px;">
    </div>
</main>
</body>

</html>