<?php
require "RecupDonneesCapteur.php";
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

function checkLogin($id,$mdp)
{
    $db=dbConnect();
    $req1 = $db->prepare('SELECT Nom, Prenom FROM personne WHERE Identifiant = :id AND Mot_de_passe=:mdp');
    $req1->execute(array('id'=> $id,
        'mdp'=>md5($mdp)));
    
    $donnees = $req1->fetch();
    $name['nom'] = $donnees['Nom'];
    $name['prenom'] = $donnees['Prenom'];
    if(!empty($name['nom']))  {
        return True;
    }
    else{
        return False;
    }
}

function liste_piece($log)
{
    $db=dbConnect();
    $req1 = $db->prepare('SELECT Id_personne FROM personne WHERE Identifiant = :id');
    $req1->execute(array('id'=> $log));
    $donnees = $req1->fetch();
    $id = $donnees['Id_personne'];
    
    $req2 = $db->prepare('SELECT Id_logement FROM utilisateur WHERE Id_person = :idp');
    $req2->execute(array('idp'=> $id));
    $donnees2 = $req2->fetch();
    $id_house = $donnees2['Id_logement'];
    
    $req3 = $db->prepare('SELECT Nom FROM piece WHERE Id_logement = :idl');
    $req3->execute(array('idl'=> $id_house));
    $increment=0;
    $ensemble_piece[0]='none';
    while($donnees3 = $req3->fetch())
    {
        $ensemble_piece[$increment]=$donnees3['Nom'];
        $increment++;
    }
    $req3->closeCursor();
    return $ensemble_piece;
}

function analyseDonnees($name){
    $db=dbConnect();
    $req1 = $db->prepare('SELECT Valeur FROM donnees WHERE Type_capteur = :nm ORDER BY Date DESC, Heure DESC');
    $req1->execute(array('nm'=> $name));
    $i=0;
    while($donnees = $req1->fetch())
    {
        $data[$i]=$donnees['Valeur'];
        $i++;
    }
    $req1->closeCursor();
    return $data[0];
}






?>