<?php session_start(); ?>
<?php
       require 'ModeleAjoutCapteur.php';      
      // $ens_capteur=ensembleCapteurbyPiece($idPiece);///////////////////////////////       
    if(!empty($_POST['humidite']) | !empty($_POST['lumiere']) | !empty($_POST['presence']) | !empty($_POST['volet']) | !empty($_POST['thermometre']) | !empty($_POST['fumee'])){
           if(!empty($_POST['humidite'])){
               deleteCapteur('humidite', getIdPieceFromName($_SESSION['pieceC'],$_SESSION['login']));
           }
           
           if(!empty($_POST['lumiere'])){
               deleteCapteur('lumiere', getIdPieceFromName($_SESSION['pieceC'],$_SESSION['login']));
           }
           if(!empty($_POST['presence'])){
               deleteCapteur('presence', getIdPieceFromName($_SESSION['pieceC'],$_SESSION['login']));
           }
           if(!empty($_POST['volet'])){
               deleteCapteur('volet', getIdPieceFromName($_SESSION['pieceC'],$_SESSION['login']));
           }
           if(!empty($_POST['thermometre'])){
               deleteCapteur('thermometre', getIdPieceFromName($_SESSION['pieceC'],$_SESSION['login']));
           }
           if(!empty($_POST['fumee'])){
               deleteCapteur('fumee', getIdPieceFromName($_SESSION['pieceC'],$_SESSION['login']));
           }
           //deleteCapteur('humidite',58); //C'est le session pieceC qui marche po (seesion piece ce donne un id ou bien le nom?)
           header ('location: ../Mon_logement/VueInfoLogement.php');
       }
       if(empty($_POST['humidite']) & empty($_POST['lumiere']) & empty($_POST['presence']) & empty($_POST['volet']) & empty($_POST['thermometre']) & empty($_POST['fumee'])){
           header ('location: ../Mon_logement/VueInfoLogement.php');
       }
?>






<!-- <table>
	<tr> <?php       
     if(in_array('humidite', $ens_capteur)){ ?>
         <td class="un"><input type="checkbox" name="humidite" value="humidite"/> <label> Capteur d'humidité</label></td>           
     <?php }
     if(!in_array('humidite', $ens_capteur)){ ?>
         <td class="un"><input type="checkbox" name="humidite" value="humidite" disabled/> <label> Capteur d'humidité</label></td>
     <?php } 
     
     if(in_array('lumiere', $ens_capteur)){ ?>
         <td class="deux"><input type="checkbox" name="lumiere" value="lumiere"/> <label> Capteur d'état de lumière</label></td>           
     <?php }
     if(!in_array('lumiere', $ens_capteur)){ ?>
         <td class="deux"><input type="checkbox" name="lumiere" value="lumiere" disabled/> <label> Capteur d'état de lumière</label></td>
     <?php } 
     
     if(in_array('presence', $ens_capteur)){ ?>
         <td class="trois"><input type="checkbox" name="presence" value="presence"/> <label> Détecteur de présence</label></td>           
     <?php }
     if(!in_array('presence', $ens_capteur)){ ?>
         <td class="trois"><input type="checkbox" name="presence" value="presence" disabled/> <label> Détecteur de présence</label></td>
     <?php } ?>
	</tr>
	
    <tr> <?php 	
    if(in_array('volet', $ens_capteur)){ ?>
         <td class="quatre"><input type="checkbox" name="volet" value="volet"/><label>Détecteur d'état des volets</label></td>           
     <?php }
     if(!in_array('volet', $ens_capteur)){ ?>
         <td class="quatre"><input type="checkbox" name="volet" value="volet" disabled/><label>Détecteur d'état des volets</label></td>
     <?php } 
     
     if(in_array('thermometre', $ens_capteur)){ ?>
         <td class="cinq"><input type="checkbox" name="thermometre" value="thermometre"/><label>Thermomètre</label></td>           
     <?php }
     if(!in_array('thermometre', $ens_capteur)){ ?>
         <td class="cinq"><input type="checkbox" name="thermometre" value="thermometre" disabled/><label>Thermomètre</label></td>
     <?php } 
     
     if(in_array('fumee', $ens_capteur)){ ?>
         <td class="six"><input type="checkbox" name="fumee" value="fumee"/><label>Détecteur de fumée</label></td>           
     <?php }
     if(!in_array('fumee', $ens_capteur)){ ?>
         <td class="six"><input type="checkbox" name="fumee" value="fumee"/><label>Détecteur de fumée</label></td>
     <?php } ?>   
	</tr>
</table> -->

