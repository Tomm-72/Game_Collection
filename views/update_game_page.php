<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour jeu</title>
    <link rel="stylesheet" href="src\styles\forms.css">
</head>

<body>
    <main>
        <div>
            <div>
                <?php echo $game['url_img_jeu'] ?>
            </div>
            <div>
                <?php echo $game['nom_jeu'] ?>
            </div>
            <div>
                <?php echo $game['desc_jeu'] ?>
            </div>
            <div>
                Temps passé : <?php echo $game['nb_heure_jeu'] ?> h
            </div>
            <div>
                Ajouter du temps passé sur le jeu
            </div>
            <form method="post">
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
    </main>
</body>

</html>