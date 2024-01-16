<?php
// Établir une connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game_collection";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

$query = "SELECT * FROM Jeu ";
$result = mysqli_query($conn, $query);
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
// Fermer la connexion à la base de données
mysqli_close($conn);
?>
