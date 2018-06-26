<?php
session_start();
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

while ($donnees1 = $req_test_niveau->fetch()) {
    $niv_compte = $donnees1['Niveau_d_admin'];
}


if($niv_compte == 2){
    $req_ID_online->closeCursor();
    $req_test_niveau->closeCursor();
    if (!empty($_POST["message"]) AND !empty($_POST["objet"])) {
        $message = $_POST["message"];
        $identifiant = $_POST["login"];
        $objet = $_POST["objet"];
        $date = date('Y-m-d h:i:s');
        $req_message = $bdd->prepare('INSERT INTO messagerie(Id_message, Expediteur, Destinataire, Contenu, objet, date) VALUES(NULL, "admin" , ?, ?, ?, ?)');
        $req_message->execute(array($identifiant,$message, $objet, $date));
        $req_message->closeCursor();
        /*$_SESSION['identifiant']*/
        ?>
        
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8" />
        <title>Validation messagerie</title>
        <link rel="stylesheet" href="modele.contact.css" />
        </head>
        <body>
        
        <p class= "icone"> <img class ="picture" src="../Media/ValidationIcone.png" alt="icone de validation" /> </p>
        <h1>Le message a bien été envoyé.</h1>
        <div id="boutons_end" >
        
        <form action="vues.messagerie_client.php" method="GET">
        <input type="submit" value="Retour à la messagerie" class="btn btn-primary" />
        </form>
        <form action="vues.contact.php" method="GET">
        <input type="submit" value="Envoyer un autre mail" class="btn btn-primary" />
        </form>
        
        </div>
        
        </body>
    <?php
     } else {
         //    $_SESSION["Expediteur"] $_SESSION["Destinataire"]
          include 'vues.refus_mail.php'; }
     
} else {
    $req_ID_online->closeCursor();
    $req_test_niveau->closeCursor();
    if (!empty($_POST["message"]) AND !empty($_POST["objet"])) {
        $message = $_POST["message"];
        $objet = $_POST["objet"];
        $date = date('Y-m-d h:i:s');
        $req_message = $bdd->prepare('INSERT INTO messagerie(Id_message, Expediteur, Destinataire, Contenu, objet, date) VALUES(NULL, ? , "admin", ?, ?, ?)');
        $req_message->execute(array($_SESSION["login"],$message, $objet, $date));
        $req_message->closeCursor();
        /*$_SESSION['identifiant']*/
        ?>
        
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8" />
        <title>Validation messagerie</title>
        <link rel="stylesheet" href="modele.contact.css" />
        </head>
        <body>
        
        <p class= "icone"> <img class ="picture" src="../Media/ValidationIcone.png" alt="icone de validation" /> </p>
        <h1>Le message a bien été envoyé.</h1>
        <p class= "info"> Votre demande sera traitée dans les meilleurs delais. </p>
        <div id="boutons_end" >
        
        <form action="vues.messagerie_client.php" method="GET">
        <input type="submit" value="Retour à la messagerie" class="btn btn-primary" />
        </form>
        <form action="vues.contact.php" method="GET">
        <input type="submit" value="Envoyer un autre mail" class="btn btn-primary" />
        </form>
        
        </div>
        
        </body>
    <?php
     } else {
         //    $_SESSION["Expediteur"] $_SESSION["Destinataire"]
          include 'vues.refus_mail.php'; }
}





