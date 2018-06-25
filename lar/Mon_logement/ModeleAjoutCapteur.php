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

function addCapteur($nameP,$nameCapt){
    $db=dbConnect();
    $req0 = $db->prepare('SELECT Id_piece FROM piece WHERE Nom=:n');
    $req0->execute(array('n' => $nameP));
    $donnees = $req0->fetch();
    $id = $donnees['Id_piece'];
    $req = $db->prepare('INSERT INTO capteur(Nom,Id_piece) VALUES(:name, :piece)');
    $req->execute(array(
        'name' => $nameCapt,
        'piece' => $id
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
function deleteCapteur($nameP,$idp){ 
    $db=dbConnect();
    $req0 = $db->prepare('DELETE FROM capteur WHERE Nom=:n AND Id_piece=:id');
    $req0->execute(array('n' => $nameP, 'id'=>$idp));
}

function ensembleCapteurbyPiece($idPiece){
    $db=dbConnect();
    $req = $db->prepare('SELECT Nom FROM capteur WHERE Id_piece = :idp');
    $req->execute(array('idp'=> $idPiece));
    $ens_capteur[0]='none';
    $i=0;
    while ($donnees = $req->fetch())
    {
        $ens_capteur[$i]=$donnees['Nom'];
        $i++;
    }
    $req->closeCursor();
    return $ens_capteur;
}

function getIdPieceFromName($name,$login){
    $db=dbConnect();
    $req = $db->prepare('SELECT Id_piece FROM piece WHERE Nom = :nm AND Id_logement=:idl');
    $req->execute(array('nm'=> $name, 'idl'=>houseFromIdpers($login)));
    $donnees = $req->fetch();
    $id=$donnees['Id_piece'];
    return $id;
}







?>