<?php
function createUser($nom,$prenom,$mdp,$mail) {
    $db = getDB();
    
    $db_query_create = $db->prepare('insert into Utilisateur(nom_user,pren_user,mdp_user,mail_user) values(:nom,:pren,:mdp,:mail)');
    
    $db_query_create->execute([
        'nom' => $nom,
        'pren' => $prenom,
        'mdp' => $mdp,
        'mail' => $mail
    ]);
}

function updateUser($id_user, $nom, $prenom, $mdp, $mail ){
    $db = getDB();

    $db_query_update =$db->prepare('update Utilisateur SET nom_user = :nom, pren_user = :prenom, mdp_user = :mdp, mail_user = :mail WHERE id_user = :id');

    $db_query_update->execute([
        'nom' => $nom,
        'pren' => $prenom,
        'mdp' => $mdp,
        'mail' => $mail,
        'id' => $id_user
    ]);
}

function deleteUser($id_user){
    $db = getDB();

    $db_query_delete = $db->prepare('delete FROM Utilisateur WHERE id_user = :id');

    $db_query_delete->execute([
        'id' => $id_user
    ]);
}

function getMDPUser($mail){
    $db = getDB();

    $db_query_mdp = $db->prepare('SELECT mdp_utilisateur FROM utilisateur WHERE mail_utilisateur = :mail');

    $db_query_mdp->execute([
        "mail" => $mail
    ])

    $mdp = $db_query_mdp->fetch(PDO::FETCH_ASSOC);

    return $mdp;
}

function getIdUser($mail){
    $db = getDB();

    $db_query_id = $db->prepare('SELECT id_utilisateur FROM utilisateur WHERE mail_utilisateur = :mail');

    $db_query_id->execute([
        "mail" => $mail
    ])

    $id = $db_query_mdp->fetch(PDO::FETCH_ASSOC);

    return $id;

}
?>