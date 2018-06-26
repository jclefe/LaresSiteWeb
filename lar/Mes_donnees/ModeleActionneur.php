<?php

if (!empty($_POST['lum1'])){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=008E&TRAME=".$_POST['lum1']);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab= preg_split("/1008E/", $data);
    header('location:../Mes_donnees/VueActionneur.php');
}

if (!empty($_POST['lum2'])){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=008E&TRAME=".$_POST['lum2']);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab= preg_split("/1008E/", $data);
    header('location:../Mes_donnees/VueActionneur.php');
}

if (!empty($_POST['lum3'])){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=008E&TRAME=".$_POST['lum3']);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab= preg_split("/1008E/", $data);
    header('location:../Mes_donnees/VueActionneur.php');
}

if (!empty($_POST['voletH'])){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=008E&TRAME=".$_POST['voletH']);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab= preg_split("/1008E/", $data);
    header('location:../Mes_donnees/VueActionneur.php');
}

if (!empty($_POST['downlum'])){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=008E&TRAME=".$_POST['downlum']);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab= preg_split("/1008E/", $data);
    header('location:../Mes_donnees/VueActionneur.php');
}

if (!empty($_POST['voletL'])){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=008E&TRAME=".$_POST['voletL']);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab= preg_split("/1008E/", $data);
    header('location:../Mes_donnees/VueActionneur.php');
}

if (!empty($_POST['lum3'])){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=COMMAND&TEAM=008E&TRAME=".$_POST['lum3']);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_tab= preg_split("/1008E/", $data);
    header('location:../Mes_donnees/VueActionneur.php');
}


/*
 1008E2011111AA --> LED1 HIGH
 1008E2012222AE --> LED2 HIGH
 1008E2013333B2 --> LED3 HIGH
 1008E2010000A6 --> LED1 2 3 LOW
 1008E2014444B6 --> Moteur HIGH
 1008E2015555BA --> Moteur LOW
 
 */
?>