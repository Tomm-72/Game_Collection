<?php
function createGame($nom,$editeur,$date,$desc,$url_img,$url_site,$playstation,$xbox,$nintendo){
    $db = getDB();

    $db_query_create_game = $db->prepare('INSERT INTO JEU("nom_jeu","editeur_jeu","date_jeu","desc_jeu","url_img_jeu","url_site_jeu") VALUES(:nom,:editeur,:date,:desc,:url_img,:url_site)');

    $db_query_create_game->execute([
        'nom' => $nom,
        'editeur' => $editeur,
        'date' => $date,
        'desc' => $desc,
        'url_img' => $url_img,
        'url_site' => $url_site
    ]);

    $id = getIdGame($nom,$editeur,$date,$desc,$url_img,$url_site);

    if(isset($playstation)){
        createDisponibilite($id,$playstation);
    };

    if(isset($xbox)){
        createDisponibilite($id,$xbox);
    };

    if(isset($nintendo)){
        createDisponibilite($id,$nintendo);
    };

}

function createDisponibilite($id,$plateforme){
    $db = getDB();

    $db_query_create_disponibilite = $db->prepare('INSERT INTO disponibilite("id_jeu","nom_plateforme") VALUES(:id,:plateforme)');
    
    $db_query_create_disponibilite->execute([
        'id' => $id,
        'plateforme' => $plateforme
    ]);
}

function getIdGame($nom,$editeur,$date,$desc,$url_img,$url_site){
    $db = getDB();

    $db_query_id = $db->prepare('SELECT id_jeu FROM jeu WHERE nom_jeu = :nom, editeur_jeu = :editeur, date_jeu = :date , desc_jeu = :desc , url_img_jeu = :url_img , url_site_jeu = :url_site');

    $db_query_id->execute([
            'nom' => $nom,
            'editeur' => $editeur,
            'date' => $date,
            'desc' => $desc,
            'url_img' => $url_img,
            'url_site' => $url_site
    ]);

    $id = $db_query_id->fetch(PDO::FETCH_ASSOC);

    return $id;
}


?>