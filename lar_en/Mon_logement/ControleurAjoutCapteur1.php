<?php
session_start();
require 'ModeleAjoutCapteur.php';
if (!empty($_POST['ajouter'])){
    $_SESSION['pieceC']=$_POST['pays'];
    header ('location: VueAjoutCapteur.php');
}

if (!empty($_POST['supprimer'])){
    $_SESSION['pieceC']=$_POST['pays'];
    header ('location: ../Mon_logement/VueSupprimerCapteur.php');
}

?>