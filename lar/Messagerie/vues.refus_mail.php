<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Refus messagerie</title>
        <link rel="stylesheet" href="vues.refus_mail.css" />
    </head>
    <body>

         <p class= "image"> <img class ="picture" src="../Media/refus_icone.png" alt="icone de refus" /> </p>
         <h1>Mail non envoyé !</h1>
         <p class= "message_utilisateur"> veuillez entrer un objet/message à transmettre aux administrateurs.</p>
         <div id="boutons_end" >

           <form action="vues.messagerie_client.php" method="GET">
	            <input type="submit" value="Retour à la messagerie" class="btn btn-primary" />
           </form>
           <form action="vues.contact.php" method="GET">
	            <input type="submit" value=" Envoyer un mail" class="btn btn-primary" />
           </form>

         </div>
         
    </body>