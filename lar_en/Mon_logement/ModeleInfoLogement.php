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

function getSuperficie($log){
    $db=dbConnect();
    
    $req = $db->prepare('SELECT Id_logement FROM utilisateur INNER JOIN personne ON personne.Id_personne=utilisateur.Id_person WHERE personne.Identifiant = :id');
    $req->execute(array('id'=> $log));
    $data = $req->fetch();
    $superf = $data['Id_logement'];
    
    $req1 = $db->prepare('SELECT Superficie FROM logement WHERE Id_logement = :id');
    $req1->execute(array('id'=> $data['Id_logement']));
    $donnees = $req1->fetch();
    $superf = $donnees['Superficie'];
    return $superf;
}

?>