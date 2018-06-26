<!--<?php session_start();?>-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
       <link rel="stylesheet" href="../Style.css" />
        <title>Housing information</title>
    </head>
	<?php require '../Annexe/menu.php';?>
	<?php require 'ControleurInfoLogement.php' ?>
     	<body class="bodyLogement">
        <div class="fenetr">
            <h1 class="titre">Housing information</h1>
            <form method="post" action="traitement.php">
            <table class="tableLogement">
            <tr>
                <td class="tdLogement">Area : </td>
                <td class="tdLogement"><?php echo getSuperficie($_SESSION['login']) . " m²"?> </td> <!-- A changer et mettre la superficie -->
            </tr>
            <tr>
                <td class="tdLogement">Users list : </td>              
                <td class="tdLogement">
                	<select name="pays" id="pays">
                           <?php for ($i=0;$i<count($_SESSION['ens_pieces']);$i++)
                            { 
                                echo "<option value=". $_SESSION['ens_pieces'][$i].">". $_SESSION['ens_pieces'][$i] . "</option>";
                            } ?>          
            		</select> </td>
                    
                    
            		
            		
                <!-- <td class="tdLogement"><input type="button" value="Ok" class="boutons2"></td> -->
            </tr>
            <tr>
            <!--<td class="tdLogement"><input type="button" value="Ajouter/Supprimer capteur" class="boutons2"></td> -->
                <td class="tdLogement"><a class="boutons2" href="VueAjoutCapteur1.php">Add/Delete sensor</a></td>
              <!-- <td class="tdLogement"><input type="button" value="Ajouter/Supprimer pièce" class="boutons2"></td> -->
                <td class="tdLogement"><a class="boutons2" href="VueModifierPiece.php">Add/Delete sensor</a></td>
            </tr>
        </table>
        </form>
        </div>
 	</body>
</html>