<?php session_start();?>
<?php
    require 'ModeleModifierPiece.php';
    if(!empty($_POST['nom_de_piece']) AND !empty($_POST['superficie'])){
        add_piece($_POST['nom_de_piece'],$_POST['superficie'],houseFromIdpers($_SESSION['login'])); 
        $_SESSION['ens_pieces']=liste_piece($_SESSION['login']);
        header ('location: ../Mon_logement/VueInfoLogement.php');      
    }
    
    if(!empty($_POST['pays'])){
        delete_piece($_POST['pays'],$_SESSION['login']);
        $_SESSION['ens_pieces']=liste_piece($_SESSION['login']);        
        header ('location: ../Mon_logement/VueInfoLogement.php'); 
    }
?>