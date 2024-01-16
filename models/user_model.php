<?php
function createUser($nom,$prenom,$mdp,$mail) {
    global $db;
    
    $db_query_create = $db->prepare('insert into Utilisateur(nom_utilisateur,prenom_utilisateur,mdp_utilisateur,mail_utilisateur) values(:nom,:pren,:mdp,:mail)');
    
    $db_query_create->execute([
        'nom' => $nom,
        'pren' => $prenom,
        'mdp' => $mdp,
        'mail' => $mail
    ]);
}

function updateUser($id_user, $nom, $prenom, $mdp, $mail ){
    global $db;

    $db_query_update =$db->prepare('update Utilisateur SET nom_utilisateur = :nom, prenom_utilisateur = :prenom, mdp_utilisateur = :mdp, mail_utilisateur = :mail WHERE id_utilisateur = :id');

    $db_query_update->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'mdp' => $mdp,
        'mail' => $mail,
        'id' => $id_user
    ]);
}

function deleteUser($id_user){
    global $db;

    $db_query_delete = $db->prepare('delete FROM Utilisateur WHERE id_utilisateur = :id');

    $db_query_delete->execute([
        'id' => $id_user
    ]);
}

function getMDPUser($mail){
    global $db;

    $db_query_mdp = $db->prepare('SELECT mdp_utilisateur FROM utilisateur WHERE mail_utilisateur = :mail');

    $db_query_mdp->execute([
        "mail" => $mail
    ]);

    $mdp = $db_query_mdp->fetch(PDO::FETCH_ASSOC);

    return $mdp;
}

function getIdUser($mail){
    global $db;

    $db_query_id = $db->prepare('SELECT id_utilisateur FROM utilisateur WHERE mail_utilisateur = :mail');

    $db_query_id->execute([
        "mail" => $mail
    ]);

    $id = $db_query_id->fetch();

    return $id["id_utilisateur"];

}
function getUserInfoById($id){
    global $db;

    $db_query_info = $db->prepare('SELECT mdp_utilisateur, nom_utilisateur, prenom_utilisateur, mail_utilisateur FROM utilisateur WHERE id_utilisateur = :id');

    $db_query_info->execute([
        "id" => $id
    ]);

    $info = $db_query_info->fetch(PDO::FETCH_ASSOC);

    return $info;
}
?>