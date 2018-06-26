<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Messagerie</title>
        <link rel="stylesheet" href="vues.messagerie_client.css" />
    </head>

 	<body>
 	    <?php// include("../Annexe/menu.php");?>
 	   <div class="conteneur_messagerie">
 	    <div class="bloc_messagerie">
 	    <nav>
              <ul class="menu_messagerie">
                    <p class="menu_title"> Menu </p>
                    <li class="option_mails"><a href="vues.messagerie_client.php">Boite de réception</a></li>
                    <li class="option_mails"><a href="vues.contact.php">Envoyer un nouveau mail</a></li>
                    <li class="option_mails"><a href="vues.mails_envoyes.php">Mails envoyés</a></li>
                    <li class="option_mails"><a href="../Mes_donnees/VueValeurCapteur.php">Accueil</a></li>
             </ul>
         </nav>
         </div>
    <div class="bloc_messagerie">
    <table class="contenu_messagerie" id="contenu_messagerie">
   <caption>Boite de réception</caption>

   <thead> 
       <tr>
           <th>Expéditeur</th>
           <th>Objet</th>
           <th>Date</th>
           <th>Contenu</th>
       </tr>
   </thead>

   <tfoot> 
       <!--   <tr>
           
           <th class="bloc_suite_mail" colspan="4">
           
               <a onclick="change_page_next();" title="Plus de mails" href=""><p><img class="fleche_suite_reception" src="images site APP/fleche_suite_mail.png" alt="Photo de fleche mails suivants" /></p></a>
               <form method="post" action="model.traitement_messagerie.php">
                    <input class= "bouton_next_mail" type="submit" value="Voir plus de mails"/>
                </form>
               
           
           </th>
           
       </tr> -->
   </tfoot>

   <tbody>
   
   <?php include ("controller.messagerie_client.php"); ?>

   
   
   </tbody>
   </table>
   
   
   </div>
   </div>
</body>
</html>