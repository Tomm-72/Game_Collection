<?php

function addGameInLibrary($id_user, $id_game, $nb_heure)
{
    global $db;

    if (isset($nb_heure)) {
        $db_query_create = $db->prepare('INSERT INTO bibliotheque VALUES(:id_user,:id_game,:heure)');

        $db_query_create->execute([
            'id_user' => $id_user,
            'id_game' => $id_game,
            'heure' => $nb_heure
        ]);
    } else {
        $db_query_create = $db->prepare('INSERT INTO bibliotheque VALUES(:id_user,:id_game,:heure)');

        $db_query_create->execute([
            'id_user' => $id_user,
            'id_game' => $id_game,
            'heure' => 0
        ]);
    }
};

function updateGameInLibrary($id_user, $id_game, $nb_heure)
{
    global $db;

    $db_query_update = $db->prepare('UPDATE bibliotheque set nb_heure_jeu = nb_heure_jeu + :heure WHERE id_utilisateur = :id_user and id_jeu = :id_game');

    $db_query_update->execute([
        'id_user' => $id_user,
        'id_game' => $id_game,
        'heure' => $nb_heure
    ]);
};

function deleteGameInLibrary($id_user,$id_game){
    global $db;

    $db_query_delete = $db->prepare('DELETE FROM bibliotheque WHERE id_utilisateur = :id_user and id_jeu = :id_game');

    $db_query_delete->execute([
        'id_user' => $id_user,
        'id_game' => $id_game
    ]);
};

function getLibraryOfUser($id_user){
    global $db;

    $db_query_select = $db->prepare('SELECT jeu.id_jeu, jeu.nom_jeu, jeu.editeur_jeu, jeu.url_img_jeu, nb_heure_jeu FROM bibliotheque INNER JOIN jeu on jeu.id_jeu=bibliotheque.id_jeu WHERE id_utilisateur = :id_user');

    $db_query_select->execute([
        'id_user' => $id_user
    ]);

    $games = $db_query_select->fetchAll(PDO::FETCH_ASSOC);

    return $games;
}

function getLibraryGameOfUserByIdGame($id_user, $id_game){
    global $db;

    $db_query_select = $db->prepare('SELECT jeu.id_jeu, jeu.nom_jeu, jeu.desc_jeu, jeu.url_img_jeu, nb_heure_jeu FROM bibliotheque INNER JOIN jeu on jeu.id_jeu=bibliotheque.id_jeu WHERE id_utilisateur = :id_user AND jeu.id_jeu = :id_jeu');

    $db_query_select->execute([
        'id_user' => $id_user,
        'id_jeu' => $id_game
    ]);

    $game = $db_query_select->fetch(PDO::FETCH_ASSOC);

    return $game;
}
