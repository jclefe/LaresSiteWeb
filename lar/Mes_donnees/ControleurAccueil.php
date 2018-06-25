<?php session_start();?>
<?php
     if(!empty($_POST['login']) AND !empty($_POST['pass'])){
        require 'ModeleAccueil.php';
        if(checkLogin(htmlspecialchars($_POST['login']),htmlspecialchars($_POST['pass']))==True){
            $_SESSION['login']=htmlspecialchars($_POST['login']);
            $_SESSION['ens_pieces']=liste_piece($_SESSION['login']);
            header ('location:VueValeurCapteur.php');
        }
    }
    
else{ ?>
   <!--  echo "Veuillez inscrire votre identifiant et mot de passe"; //a changer, mettre un script javascript ??  -->
    <script>alert("Veuillez inscrire votre identifiant et mot de passe")</script> <?php 
}

?>