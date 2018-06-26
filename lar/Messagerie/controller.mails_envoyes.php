<?php
include ("model.mails_envoyes.php");

function new_mail_page() {
    for ($i = 0; $i<$_SESSION["compteur"]; $i++) {
        $value_objet = $_SESSION['objet'.$i.''];
        $value_date = $_SESSION['date'.$i.''];
        echo '<tr>
           <td>' . $value_objet. '</td>
           <td>' . $value_date. '</td>

           <td class="content_mail">
                 <form method="post" action="vues.afficher_mail.php">
                    <input type="hidden" name="index_mail" value="'.$i.'" />
                    <input type="hidden" name="no_response" value="1" />
                    <input class= "bouton_voir_mail" type="submit" value="Voir le contenu du mail"/>
                 </form> 
           </td>

          </tr> <br/>';
    }
    $_SESSION["compteur"] = 0;
}
new_mail_page();

?>