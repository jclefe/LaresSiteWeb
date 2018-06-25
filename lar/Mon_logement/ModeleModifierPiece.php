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

function add_piece($nom,$superficie,$id_log){
    $db=dbConnect();
    $req = $db->prepare('INSERT INTO piece(Nom, Superficie, Id_logement) VALUES(:name, :superf, :home)');
    $req->execute(array(
        'name' => $nom,
        'superf' => $superficie,
        'home' => $id_log
    ));
}

function delete_piece($nom,$login){
    $db=dbConnect();
    $req = $db->prepare('DELETE FROM piece WHERE Nom = :nm AND Id_logement= :logmt');
    $req->execute(array(
        'nm' => $nom,
        'logmt' => houseFromIdpers($login)
    ));
   /* $req2 = $db->prepare('DELETE FROM capteur WHERE Id_piece IN (SELECT Id_piece FROM piece WHERE Nom=:nom AND Id_logement=:logt)');*/
    $req2 = $db->prepare('DELETE FROM capteur USING capteur INNER JOIN piece ON piece.Id_piece = capteur.Id_piece WHERE piece.Nom=:nom AND piece.Id_logement=:logt');
    //c'etat pour supprimer les capteurs associes a une piece qd on la supprime mais ca marche pas
    $req2->execute(array(
        'nom' => $nom,
        'logt' => houseFromIdpers($login) ////////////////////////////////
    ));
}

function houseFromIdpers($log)
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

    return $id_house;
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


?>