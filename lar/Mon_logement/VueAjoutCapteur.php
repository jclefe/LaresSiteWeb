<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter des capteurs</title>
        <link rel="stylesheet" href="../Style.css" />
    </head>

 	<body class="VueCapteur">
 	<?php include '../Annexe/menu.php';?>
 	<?php require 'ModeleAjoutCapteur.php';
    $ens_capteur=ensembleCapteurbyPiece(getIdPieceFromName($_SESSION['pieceC'],  $_SESSION['login']));?>     
         <div class="conteneurCapteur">    
            <h1 class="titreCapteur">Choisissez les capteurs souhaités pour <?php echo $_SESSION['pieceC']?> :</h1> 
            <form method="post" action="ControleurAjoutCapteur.php"><!-- ////////////////////////// -->
        		<!-- <table>
        			<tr>
        				<td class="un"><input type="checkbox" name="humidite" value="humidite"/> <label> Capteur d'humidité</label></td>
        				<td class="deux"><input type="checkbox" name="lumiere" value="lumiere"/> <label> Capteur d'état de lumière</label></td>
        				<td class="trois"><input type="checkbox" name="presence" value="presence"/> <label> Détecteur de présence</label></td>
        			</tr>
        			<tr class="deux">
                    	<td class="quatre"><input type="checkbox" name="volet" value="volet"/><label>Détecteur d'état des volets</label></td>
        				<td class="cinq"><input type="checkbox" name="thermometre" value="thermometre"/><label>Thermomètre</label></td>
        				<td class="six"><input type="checkbox" name="fumee" value="fumee"/><label>Détecteur de fumée</label></td>
         			</tr>
        		</table> -->
        		<table>
                	<tr> <?php       
                     if(!in_array('humidite', $ens_capteur)){ ?>
                         <td class="un"><input type="checkbox" name="humidite" value="humidite"/> <label> Capteur d'humidité</label></td>           
                     <?php }
                     if(in_array('humidite', $ens_capteur)){ ?>
                         <td class="un"><input type="checkbox" name="humidite" value="humidite" disabled/> <label> Capteur d'humidité</label></td>
                     <?php } 
                     
                     if(!in_array('lumiere', $ens_capteur)){ ?>
                         <td class="deux"><input type="checkbox" name="lumiere" value="lumiere"/> <label> Capteur d'état de lumière</label></td>           
                     <?php }
                     if(in_array('lumiere', $ens_capteur)){ ?>
                         <td class="deux"><input type="checkbox" name="lumiere" value="lumiere" disabled/> <label> Capteur d'état de lumière</label></td>
                     <?php } 
                     
                     if(!in_array('presence', $ens_capteur)){ ?>
                         <td class="trois"><input type="checkbox" name="presence" value="presence"/> <label> Détecteur de présence</label></td>           
                     <?php }
                     if(in_array('presence', $ens_capteur)){ ?>
                         <td class="trois"><input type="checkbox" name="presence" value="presence" disabled/> <label> Détecteur de présence</label></td>
                     <?php } ?>
                	</tr>
                	
                    <tr> <?php 	
                    if(!in_array('volet', $ens_capteur)){ ?>
                         <td class="quatre"><input type="checkbox" name="volet" value="volet"/><label>Détecteur d'état des volets</label></td>           
                     <?php }
                     if(in_array('volet', $ens_capteur)){ ?>
                         <td class="quatre"><input type="checkbox" name="volet" value="volet" disabled/><label>Détecteur d'état des volets</label></td>
                     <?php } 
                     
                     if(!in_array('thermometre', $ens_capteur)){ ?>
                         <td class="cinq"><input type="checkbox" name="thermometre" value="thermometre"/><label>Thermomètre</label></td>           
                     <?php }
                     if(in_array('thermometre', $ens_capteur)){ ?>
                         <td class="cinq"><input type="checkbox" name="thermometre" value="thermometre" disabled/><label>Thermomètre</label></td>
                     <?php } 
                     
                     if(!in_array('fumee', $ens_capteur)){ ?>
                         <td class="six"><input type="checkbox" name="fumee" value="fumee"/><label>Détecteur de fumée</label></td>           
                     <?php }
                     if(in_array('fumee', $ens_capteur)){ ?>
                         <td class="six"><input type="checkbox" name="fumee" value="fumee" disabled/><label>Détecteur de fumée</label></td>
                     <?php } ?>   
                	</tr>
				</table>	
       			<button class="bout" style="margin-left:26%">Valider</button>
			</form>            
        </div>
 	</body>
</html>

<style>
input[type=checkbox] {
    -webkit-appearance: none;
    /*-moz-appearance: none;*/
    /*-ms-appearance: none;*/
}

input[type=checkbox] {
    background-color: black;
    background-size:6vh;
    background-repeat: no-repeat;
    background-position: top 2vh center;
	border-radius: 23px;
	width: 17vh;
	height:15vh;
	cursor: pointer;
	text-align: center;
}

.un input[type=checkbox] {
	background-image: url('../Media/drop.png');
}	

.deux input[type=checkbox] {
	background-image: url('../Media/light-bulb.png');
}

.trois input[type=checkbox] {
	background-image: url('../Media/thief.png');
}
.quatre input[type=checkbox] {
	background-image: url('../Media/blinds.png');
}
.cinq input[type=checkbox] {
	background-image: url('../Media/thermometer.png');
}
.six input[type=checkbox] {
	background-image: url('../Media/flame.png');
}

input[type="checkbox"]:checked {
  background-color: rgb(0,255,0);
  background-size: 6vh;
}

input[type="checkbox"]:hover {
  background-color: rgb(0,255,0);
  box-shadow: 3px 3px 6px black;
  animation-duration: 1s;
  animation-name: colorchange;
}

input[type="checkbox"]:checked:hover {
  background-color: black;
  background-size: 6vh;
  animation-name: colorchange2;
}

input[type="checkbox"]:disabled {
  background-color: rgba(192,192,192,0.5);
}

input[type="checkbox"]:disabled:hover {
  background-color: rgba(192,192,192,0.5);
  box-shadow: 0px 0px 0px rgb(192,192,192);
  animation-duration: 1s;
  animation-name: colorchange3;
  cursor: default;
}

label
{
	position: absolute;
	display: run-in;
	color: white;
	font-size: 0.7em;
    font-family: Trebuchet MS;
    cursor: default;
    user-select: none;
    width: 16vh;
	text-align: center;
}

.un label {
  top: 47vh;
  left:43.7%;
}

.deux label {
	top: 47vh;
	left: 52.7%;
}

.trois label{
	top:47vh;
	left: 61.7%;
}
.quatre label{
	top:64vh;
	left:43.7%;
}
.cinq label{
	top:64vh;
	left: 52.7%;
}
.six label{
	top:64vh;
	left: 61.6%;
}

@keyframes colorchange {
  from {
    background-color: black;
  }

  to {
    background-color: rgb(0,255,0);
    box-shadow: 3px 3px 6px black; 
  }
}

@keyframes colorchange2 {
  from {
    background-color: rgb(0,255,0);
  }

  to {
    background-color: black;
    box-shadow: 3px 3px 6px black; 
  }
}


</style>