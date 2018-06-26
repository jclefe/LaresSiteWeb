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











