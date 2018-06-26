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

function add_user($nom, $prenom, $identifiant, $mdp, $genre, $adresse, $ville, $codePostal){
    $db=dbConnect();
    $req = $db->prepare('INSERT INTO personne(Nom, Prenom, Identifiant, Mot_de_passe,GENRE) VALUES(:name, :prenom, :id, :mdp, :genre)');
    $req->execute(array(
        'name' => $nom,
        'prenom' => $prenom,
        'id' => $identifiant,
        'mdp' => md5($mdp),
        'genre' => $genre
    ));
    
    $req2 = $db->prepare('INSERT INTO utilisateur(Niveau_de_Droit, Adresse, Ville, Code_postal, Id_person, Id_logement) VALUES(:nvd, :adr, :city, :zip, :idp, :idl)');
    $i=1;
    $req2->execute(array(
        'nvd' => $i,
        'adr' => $adresse,
        'city' => $ville,
        'zip' => $codePostal,
        'idp' => getIdPersonFromLogin($identifiant),
        'idl' => $i
    ));
}

function add_house($superficie, $utilisateurpp, $conso){
    $db=dbConnect();
    $req = $db->prepare('INSERT INTO logement(Superficie, Utilisateur_principal, Consommation) VALUES(:sp, :pp, :conso)');
    $req->execute(array(
        'sp' => $superficie,
        'pp' => $utilisateurpp,
        'conso' => $conso
    ));
}

function getIdPersonFromLogin($login){
    $db=dbConnect();
    $req = $db->prepare('SELECT Id_personne FROM personne WHERE Identifiant=:id');
    $req->execute(array(
        'id' => $login
    ));
    $donnees = $req->fetch();
    $id = $donnees['Id_personne'];
    return $id;
}

function getIdHouseFromPPUser($ppuser){
    $db=dbConnect();
    $req = $db->prepare('SELECT Id_logement FROM logement WHERE Utilisateur_principal=:id');
    $req->execute(array(
        'id' => getIdPersonFromLogin($ppuser)
    ));
    $donnees = $req->fetch();
    $id = $donnees['Id_logement'];
    return $id;
}

function AddIdHouseinUser($id_logt,$login){
    $db=dbConnect();
    $req = $db->prepare('UPDATE utilisateur SET Id_logement = :idl WHERE Id_person = :idp');
    $req->execute(array(
        'idl' => $id_logt,
        'idp' => getIdPersonFromLogin($login)
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


?>










