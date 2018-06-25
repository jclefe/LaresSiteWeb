<?php
session_start();
session_destroy();
header ('location: ../Connexion/VueConnexion.php');
?>