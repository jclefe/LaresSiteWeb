<?php session_start();
    require 'ModeleMonProfil.php';
    if(!empty($_POST['nom'])){
        UpdateName(htmlspecialchars($_POST['nom']),htmlspecialchars($_SESSION['login']));
    }
    
    if(!empty($_POST['prenom'])){
        UpdatePrenom(htmlspecialchars($_POST['prenom']),htmlspecialchars($_SESSION['login']));
    } 
    
    if(!empty($_POST['password']) AND !empty($_POST['Newpassword']) AND !empty($_POST['passwordcheck'])){
        if (md5($_POST['password'])==getPassword($_SESSION['login']) AND $_POST['Newpassword']==$_POST['passwordcheck']){
            UpdatePassword(htmlspecialchars($_POST['Newpassword']),htmlspecialchars($_SESSION['login']));
        }
    }
    
    if(!empty($_POST['mail']) AND LoginNotAlreadyExist($_POST['mail'])){
        UpdateLogin(htmlspecialchars($_POST['mail']),$_SESSION['login']);
        $_SESSION['login']=htmlspecialchars($_POST['mail']);
    }    
    
    if(!empty($_POST['mail']) AND LoginNotAlreadyExist($_POST['mail'])){
        
    }
    
    header("location:../Mes_donnees/VueValeurCapteur.php");
    
?>
