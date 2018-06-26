<?php
session_start();
//$_SESSION['page'] = 1;
//$_SESSION['nbMails'] = 10;
function requete_messagerie(){
    $_SESSION["compteur"]= 0;
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', '');
        
    } catch (Exception $e)
    
    {
        
        die('Erreur : ' . $e->getMessage());
        
    }
    $req_ID_online = $bdd->prepare('SELECT Id_personne FROM personne WHERE identifiant = ?');
    $req_ID_online->execute(array( $_SESSION['login']));
    
    while ($donnees = $req_ID_online->fetch()) {
        $Id_personne_online = $donnees['Id_personne'];
    }
    $req_test_niveau = $bdd->prepare('SELECT Niveau_d_admin FROM administrateur WHERE Id_person = ?');
    $req_test_niveau->execute(array( $Id_personne_online));
    $niv_compte=0;
    while ($donnees1 = $req_test_niveau->fetch()) {
        $niv_compte = $donnees1['Niveau_d_admin'];
    }
    
    if ($niv_compte == 2) {
        $req_ID_online->closeCursor();
        $req_test_niveau->closeCursor();
        $req_mails = $bdd->query('SELECT * FROM messagerie WHERE Destinataire = "admin" ORDER BY date DESC');
        //$req_mails = $bdd->prepare('SELECT * FROM messagerie WHERE Destinataire = ? ORDER BY date DESC');
        //$req_mails->execute(array( $_SESSION['identifiant']));
        
        while ($donnees = $req_mails->fetch()) {
            $_SESSION['expéditeur'.$_SESSION["compteur"].''] = $donnees["Expediteur"];
            $_SESSION['objet'.$_SESSION["compteur"].''] = $donnees["objet"];
            $_SESSION['date'.$_SESSION["compteur"].''] = $donnees["date"];
            $_SESSION["compteur"] = $_SESSION["compteur"] +1;
        }
        $req_mails->closeCursor();
        
    } else {
        $req_ID_online->closeCursor();
        $req_test_niveau->closeCursor();
        //$req_mails = $bdd->query('SELECT * FROM messagerie ORDER BY date DESC');
        $req_mails = $bdd->prepare('SELECT * FROM messagerie WHERE Destinataire = ? ORDER BY date DESC');
        $req_mails->execute(array( $_SESSION['login']));
        
        while ($donnees = $req_mails->fetch()) {
            $_SESSION['expéditeur'.$_SESSION["compteur"].''] = $donnees["Expediteur"];
            $_SESSION['objet'.$_SESSION["compteur"].''] = $donnees["objet"];
            $_SESSION['date'.$_SESSION["compteur"].''] = $donnees["date"];
            $_SESSION["compteur"] = $_SESSION["compteur"] +1;
        }
        $req_mails->closeCursor();
    }
    
}
requete_messagerie();

?>