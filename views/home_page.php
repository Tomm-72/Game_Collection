<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/homepage.css">
    <title>GameCollection</title>
</head>
<body>    
    <div id="home">
        <h1>GameCollection</h1>
        <img id="imgHome" src="src\styles\img\imgHome.svg" alt="IMAGE">
        <h2>Mes jeux</h2>
        <div id="jeu">
            <img id="jeuImg" src="https://blog.fr.playstation.com/tachyon/sites/10/2022/03/b260da887312ad9afff5c4c1aba8f317fa6ce6e0.jpg?resize=1088%2C612&crop_strategy=smart&zoom=1.5" alt="IMG">
            <div id="txt">
                <h3>NomJeu</h3>
                <div>
                    <p class=info>Heure</p>
                    <p class=info>Plateforme</p> 
                </div>
                
            </div>

            <?php
            if (mysqli_num_rows($result) > 0) {
                // Récupérer les données du jeu
                $jeu = mysqli_fetch_assoc($result);
            
                // Afficher les informations du jeu
                echo "<h1>" . $jeu['nom_jeu'] . "</h1>";
                echo "<p>Éditeur : " . $jeu['editeur_jeu'] . "</p>";
                echo "<p>Date de sortie : " . $jeu['date_jeu'] . "</p>";
                echo "<p>Description : " . $jeu['desc_jeu'] . "</p>";
                echo "<img src='" . $jeu['url_img_jeu'] . "' alt='" . $jeu['nom_jeu'] . "' />";
                echo "<a href='" . $jeu['url_site_jeu'] . "'>Lien vers le site du jeu</a>";
            } else {
                echo "Aucun jeu trouvé avec l'ID $jeuId";
            }
            ?>
            
        </div>
        

    </div>
</body>
</html>