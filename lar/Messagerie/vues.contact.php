<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', '');
    
} catch (Exception $e)

{
    
    die('Erreur : ' . $e->getMessage());
    
}
$req_ID_online = $bdd->prepare('SELECT Id_personne FROM personne WHERE identifiant = ?');
$req_ID_online->execute(array( $_SESSION['login']));

while ($donnees = $req_ID_online->fetch()) {
    $Id_personne_online = $donnees['Id_personne'];
}
$req_test_niveau = $bdd->prepare('SELECT Niveau_d_admin FROM administrateur WHERE Id_person = ?');
$req_test_niveau->execute(array( $Id_personne_online));

while ($donnees1 = $req_test_niveau->fetch()) {
    $niv_compte = $donnees1['Niveau_d_admin'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Messagerie</title>
        <link rel="stylesheet" href="vues.contact.css" />
    </head>

 	<body>
 		<?php //include("../Annexe/menu.php");?>
     	<div class="page_contact">
     		<div class="contact_boxes">
     			<p> Un problème ? Envoyez un message à nos administrateurs ! </p>
     		</div>
     		
     		<form method="post" action="modele.contact.php">
     		    <div class="inputs_mail">
     		    <?php 
     		    if ($niv_compte == 2){
     		        if(isset($_POST["response_expediteur"])) {
                ?>
                <p><label for="identifiant">Adresse mail: </label><input type="text" name="identifiant" id="identifiant" value="<?php echo ''.$_POST["response_expediteur"].'';?>"></p>
                <?php   
     		        }else{
                ?>
                <p><label for="identifiant">Adresse mail: </label><input type="text" name="identifiant" id="identifiant"></p>
                <?php 
     		        }
     		    }
                ?>
     		        <?php 
     		        if(isset($_POST["response_objet"])) {
     		            ?>
     		            <p><label for="objet">Objet: </label><input type="text" name="objet" id="objet" value="<?php echo 'Rep/ '.$_POST["response_objet"].'';?>"></p>
                        <?php
     		        } else {
     		            echo '<p><label for="objet">Objet: </label><input type="text" name="objet" id="objet"></p>';
     		        }
     		        ?>
     				<textarea name="message" id="message" placeholder="Saisir votre message" rows="15" cols="50"></textarea>
     				<p class="bouton"> <input type="submit" value="Envoyer" class="bouton_envoyer"/> </p>
     			</div>
     			
            </form>
           <?php 
           if ($niv_compte != 2){
           ?>
           <div>
                <p class="contact">Ou contactez-nous : <br/> <br/>
                    Téléphone : 01 49 54 52 00 <br/> <br/>
                    Adresse : 28 rue Notre-Dame des Champs <br/> <br/> 
                75006 PARIS 
                </p>
            </div>    
           <?php   
           }
           ?>
           
           
            
     	</div>
     	
</body>
</html>