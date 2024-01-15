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
                    Salut <?php var_dump($_SESSION);echo $userName?><br>
                    Prêt à ajouter des jeux à ta collection?
                </p>
            </div>
        </div>

        <div id="container">
            <div id="heading">
                <p>Mes jeux</p>
            </div>
            <div id="games">
                <?php
                foreach(getGames() as $game){
                    echo "<div id='game'>";
                    echo "<img id='jeuImg' src='src\styles\img\testImg.jpg' alt='IMG'>";
                    echo "<div id='txt'>";
                    echo "<h3>".$game["nom_jeu"]."</h3>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>