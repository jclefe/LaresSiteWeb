<?php session_start();?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Room modification</title>
        <link rel="stylesheet" href="../Style.css" />
    </head>

	<body class="bodyVuePiece">
	<?php include "../Annexe/menu.php";?>
    <div class="fenetre">
    	<div class="elementVuePiece">
        <form method="post" action="ControleurModifierPiece.php"> 
      			<h2 class="titreVuePiece">Add another room :</h2>
        		  <input type="text" name="nom_de_piece" id="nom_de_piece" placeholder="Saisir le nom de la pièce" />
        		  <input class="bouton" type="submit" value="Valider" /> <br/>
        		  <input type="text" name="superficie" id="superficie" placeholder="Superficie" />	            
      	</form>
       </div>   
      <div class="elementVuePiece">
      	<form method="post" action="ControleurModifierPiece.php"> <!-- A changer ????? -->
      			<h2 class="titreVuePiece">Delete another room :</h2>
         		<select name="pays" id="pays">
                           <?php for ($i=0;$i<count($_SESSION['ens_pieces']);$i++)
                            { 
                                echo "<option value=". $_SESSION['ens_pieces'][$i].">". $_SESSION['ens_pieces'][$i] . "</option>";
                            } ?>          
            	</select>
      		  <input class="bouton" name="supprimer" type="submit" value="Supprimer" /> 
      	</form>
      </div>
    </div>  
  </body>
</html>

<?php
   /* require 'ModeleModifierPiece.php';
    if(!empty($_POST['nom_de_piece']) AND !empty($_POST['superficie'])){
        add_piece($_POST['nom_de_piece'],$_POST['superficie'],houseFromIdpers($_SESSION['login']));        
       // header ('location: ../Mon_logement/VueInfoLogement.php'); ////a changer et mettre la page d'accueil quand elle sera faite
        ?> <script> alert("La pièce a bien été ajoutée");</script> <?php    
    }
    if(empty($_POST['nom_de_piece']) OR empty($_POST['superficie'])){
        ?> <script> alert("Veuillez saisir le nom de la pièce et sa superficie");</script> <?php
    } */
?>







