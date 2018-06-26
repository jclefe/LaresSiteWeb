<?php

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getNamebyLogin($login){
    $db=dbConnect();
    $req = $db->prepare('SELECT Nom, Prenom FROM personne WHERE Identifiant=:id');
    $req->execute(array(
        'id' => $login
    ));
    $donnees = $req->fetch();
    $id['name'] = $donnees['Nom'];
    $id['firstname'] = $donnees['Prenom'];
    return $id;
}

function getIdbyLogin($login){
    $db=dbConnect();
    $req = $db->prepare('SELECT Id_personne FROM personne WHERE Identifiant=:id');
    $req->execute(array(
        'id' => $login
    ));
    $donnees = $req->fetch();
    $id= $donnees['Id_personne'];
    return $id;
}

function getAddressbyLogin($login){
    $db=dbConnect();
    $req = $db->prepare('SELECT Adresse, Ville, Code_postal FROM utilisateur WHERE Id_person=:id');
    $req->execute(array(
        'id' => getIdbyLogin($login)
    ));
    $donnees = $req->fetch();
    $address['address']= $donnees['Adresse'];
    $address['town']= $donnees['Ville'];
    $address['zip']= $donnees['Code_postal'];
    return $address;
}

function getSuperficieFromLogin($login){
    $db=dbConnect();
    $req = $db->prepare('SELECT Superficie FROM logement WHERE Utilisateur_principal=:id');
    $req->execute(array(
        'id' => getIdbyLogin($login)
    ));
    $donnees = $req->fetch();
    $superficie= $donnees['Superficie'];
    return $superficie;
}

function getPassword($login){
    $db=dbConnect();
    $req = $db->prepare('SELECT Mot_de_passe FROM personne WHERE Id_personne=:id');
    $req->execute(array(
        'id' => getIdbyLogin($login)
    ));
    $donnees = $req->fetch();
    $mdp= $donnees['Mot_de_passe'];
    return $mdp;
}

function UpdateName($name,$login){
    $db=dbConnect();
    $req = $db->prepare('UPDATE personne SET Nom = :nom WHERE Id_personne = :idp');
    $req->execute(array(
        'nom' => $name,
        'idp' => getIdbyLogin($login)
    ));
}

function UpdatePrenom($prenom,$login){
    $db=dbConnect();
    $req = $db->prepare('UPDATE personne SET Prenom = :nom WHERE Id_personne = :idp');
    $req->execute(array(
        'nom' => $prenom,
        'idp' => getIdbyLogin($login)
    ));
}

function UpdatePassword($mdp,$login){
    $db=dbConnect();
    $req = $db->prepare('UPDATE personne SET Mot_de_passe = :mdp WHERE Id_personne = :idp');
    $req->execute(array(
        'mdp' => md5($mdp),
        'idp' => getIdbyLogin($login)
    ));
}

function UpdateLogin($name,$login){
    $db=dbConnect();
    $req = $db->prepare('UPDATE personne SET Identifiant = :id WHERE Id_personne = :idp');
    $req->execute(array(
        'id' => $name,
        'idp' => getIdbyLogin($login)
    ));
}

function LoginNotAlreadyExist($name){
    $db=dbConnect();
    $req = $db->query('SELECT Identifiant FROM personne');
    $increment=0;
    $ensemble_login[0]='none';
    while($donnees = $req->fetch())
    {
        $ensemble_login[$increment]=$donnees['Identifiant'];
        $increment++;
    }
    $req->closeCursor();
    if(in_array($name,$ensemble_login)){
        return false;
    }
    return true;
}










