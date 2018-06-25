<?php session_start(); ?>
<?php
require 'ModeleAjoutCapteur.php';

if(!empty($_POST['humidite']) | !empty($_POST['lumiere']) | !empty($_POST['presence']) | !empty($_POST['volet']) | !empty($_POST['thermometre']) | !empty($_POST['fumee'])){
    if(!empty($_POST['humidite'])){
        addCapteur($_SESSION['pieceC'],'humidite');
        //addCapteur('CuisineCome','humidite');
    }
    
    if(!empty($_POST['lumiere'])){
        addCapteur($_SESSION['pieceC'], 'lumiere');
    }
    if(!empty($_POST['presence'])){
        addCapteur($_SESSION['pieceC'],'presence');
    }
    if(!empty($_POST['volet'])){
        addCapteur($_SESSION['pieceC'],'volet');
    }
    if(!empty($_POST['thermometre'])){
        addCapteur($_SESSION['pieceC'],'thermometre');
    }
    if(!empty($_POST['fumee'])){
        addCapteur($_SESSION['pieceC'],'fumee');
    }
    header ('location: ../Mon_logement/VueInfoLogement.php');
}

?>