<!DOCTYPE html>
<html>
   <head>
   		<meta charset="utf-8" />
   		<link rel="stylesheet" href="../Style.css">
      	<title>Connexion to the services</title>
   </head>
   
<body class="bodyConnexion">
  <div class="corpsConnexion">
   	<img class="imageConnexion" src ="../Media/LARES.png" alt="logoLARES" />
    <h2 class="titreConnexion">Connexion to LARES</h2>
    <form action="../Mes_donnees/ControleurAccueil.php" method="post">
      <div class="corps2Connexion">
        <input class="inputConnexion" type="text" placeholder="E-mail" name="login" id="login"/>
        <input class="inputConnexion" type="password" placeholder="Mot de passe" name="pass" id="pass"/>
        <button class="boutonConnexion" type="submit" name="connexion" value="Se connecter"/>Confirm</button>
      </div>
      <a href="../Inscription/VueInscription.php">No registered yet ? Create your account here</a>
  </div>
</body>   

<style>
a{
    font-family: Trebuchet MS;
    margin-left: 15%;
}
a:visited{
    color: black
}
</style>
</html>