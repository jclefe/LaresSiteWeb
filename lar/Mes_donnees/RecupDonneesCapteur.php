<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=008E");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch); //Recupere le fichier log sous forme d'une mega chaine de caractère
curl_close($ch);


$data_tab = str_split($data,33); //split le fichier data (log) en ligne de 33 caractères (33 caractères = 1 trame).
// compter les données dans donnees
// ne prendre que celle dont i est superieur
try {
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}
$nb_data = $bdd->query("SELECT COUNT(*) FROM donnees");
while ($donnees = $nb_data->fetch()) {
    $nb_data_bdd = $donnees['COUNT(*)'];
    echo $nb_data_bdd;
}
$nb_data->closeCursor();



for($i=$nb_data_bdd, $size=count($data_tab); $i<$size; $i++) {
    list($t,$o,$type_capteur,$n,$id_logement,$id_piece,$valeur,$a,$x,$year,$month,$day,$hour,$min,$sec) = sscanf($data_tab[$i],"%1s%4s%2s%2s%1s%1s%2s%4s%2s%4s%2s%2s%2s%2s%2s"); //défini une structure a $trame pour recuperer les valeurs facilement.
    //%1s %4s %2s %2s %1s %1s %2s %4s %2s %4s %2s %2s %2s %2s %2s
    // 1 008E 11 01 2 2 22 1234 63 2018 06 15 10 34 42
    //ajout dans la base de données :
    $id_logement=(int)ord($id_logement);
    $id_piece=(int)ord($id_piece);
    $date = "$year-$month-$day";
    $time = "$hour:$min:$sec";
    
    if ($type_capteur == '15') {
        if ($valeur == '00') {
            $request = $bdd->prepare("INSERT INTO donnees (Id_donnees, Type_capteur, Id_logement, Id_piece, Valeur, Date, Heure) VALUES (NULL, 'luminosite', ?, ?, '25%', ?, ?)");
            $request->execute(array($id_logement, $id_piece, $date, $time));
            $request->closeCursor();
        } else if ($valeur == '11') {
            $request = $bdd->prepare("INSERT INTO donnees (Id_donnees, Type_capteur, Id_logement, Id_piece, Valeur, Date, Heure) VALUES (NULL, 'luminosite', ?, ?, '50%', ?, ?)");
            $request->execute(array($id_logement, $id_piece, $date, $time));
            $request->closeCursor();
        } else if ($valeur == '22'){
            $request = $bdd->prepare("INSERT INTO donnees (Id_donnees, Type_capteur, Id_logement, Id_piece, Valeur, Date, Heure) VALUES (NULL, 'luminosite', ?, ?, '75%', ?, ?)");
            $request->execute(array($id_logement, $id_piece, $date, $time));
            $request->closeCursor();
        }
    } else if ($type_capteur == '11') {
        if ($valeur == '00') {
            $request = $bdd->prepare("INSERT INTO donnees (Id_donnees, Type_capteur, Id_logement, Id_piece, Valeur, Date, Heure) VALUES (NULL, 'presence', ?, ?, 'Non', ?, ?)");
            $request->execute(array($id_logement, $id_piece, $date, $time));
            $request->closeCursor();
        } else if ($valeur == '11') {
            $request = $bdd->prepare("INSERT INTO donnees (Id_donnees, Type_capteur, Id_logement, Id_piece, Valeur, Date, Heure) VALUES (NULL, 'presence', ?, ?, 'Oui', ?, ?)");
            $request->execute(array($id_logement, $id_piece, $date, $time));
            $request->closeCursor();
        }
    }
    
    
}

?>
