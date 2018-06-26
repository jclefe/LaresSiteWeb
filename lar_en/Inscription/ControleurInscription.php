<?php
    require 'ModeleInscription.php';
    if (htmlspecialchars($_POST['password']) == htmlspecialchars($_POST['passwordcheck']) AND LoginNotAlreadyExist(htmlspecialchars($_POST['mail'])) AND strlen($_POST['password'])>=8){
        add_user(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['password']), $_POST['gender'], htmlspecialchars($_POST['numbernameadress']), htmlspecialchars($_POST['city']), htmlspecialchars($_POST['postalcode']));
        add_house(htmlspecialchars($_POST['taille']), getIdPersonFromLogin(htmlspecialchars($_POST['mail'])), 0);
        AddIdHouseinUser(getIdHouseFromPPUser(htmlspecialchars($_POST['mail'])), htmlspecialchars($_POST['mail']));
        header('location:../Connexion/VueConnexion.php');
    }
    
    

?>    