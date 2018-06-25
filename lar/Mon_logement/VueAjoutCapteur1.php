<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter des capteurs</title>
        <link rel="stylesheet" href="../Style.css" />
    </head>

 	<body class="bodyVueCapteur1">
 	<?php include '../Annexe/menu.php';?>
 	<?php /*require 'ControleurAjoutCapteur1.php';*/?>
 		<div class="VueCapteur1">
 		<form method="post" action="ControleurAjoutCapteur1.php">
	 		<h2>Veuillez choisir la pièce concernée :  </h2> 
	 		 <select name="pays" id="payss">   
              	<?php for ($i=0;$i<count($_SESSION['ens_pieces']);$i++)
                            { 
                                echo "<option value=". $_SESSION['ens_pieces'][$i].">". $_SESSION['ens_pieces'][$i] . "</option>";
                            } ?>           
         		</select>
	 		<div>
	 			 <input class="ajouter" name="ajouter" type="submit" value="Ajouter capteur" />
	 			 <input class="supprimer" name="supprimer" type="submit" value="Supprimer capteur" />
	 		</div>
	 	</form>		
 		</div>
 	</body>
</html>