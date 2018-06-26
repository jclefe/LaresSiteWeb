<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
</head>
    
<style>
.bodyApropos
{
    margin: 0;
    background-color:lightblue;
}

.mainAPropos
{
    margin-top: 8%;
    margin-left: 20%;
    //font-family: sans-serif;
    font-family: Trebuchet MS;    
    
}
.mainAPropos h1{text-align: center;}
.mainAPropos h2, p{
    margin-left: 12.5%;
    margin-right: 12.5%;
}

.qui{
    text-align: justify;
}

.resume{
    padding-top: 3%;
    flex-wrap: wrap;
}

.line_1{
    display:flex;
    justify-content: space-around;
}

.line_2{
    display: flex;
    justify-content: center;
}
.line_2 .bulle{
    margin-left: 8%;
    margin-right: 8%;
}

.bulle{
    width: 200px;
    margin-top: 5%;
    margin-left: 6%;
    margin-right: 6%;
    
}
.bulle p{text-align: center;}

.icon{width: 200px;}
.icon img{
    display: block;
    width: 200px;   
}
</style>    
<?php include "../Annexe/menu.php" ?>
<body class="bodyApropos">
    
    <div class="mainAPropos">
    <h1><strong>À PROPOS</strong></h1><br />
    <h2><strong>QUI SOMMES-NOUS ?</strong></h2>
    <p class="qui">Nous sommes Larès, une jeune entreprise composée de 5 étudiants de l'Institut Supérieur d'Electronique de Paris. Nous proposons une expérience domotique couvrant l'ensemble des dimensions d'un tel projet, de l'installation du robot et des capteurs à domicile, à l'application de gestion à distance. Notre expertise est fondée sur des bases théoriques confirmées, ainsi que des expériences concrètes réussies. Nous mettons un point d'honneur à consulter régulièrement le client, en gérant chaque commande de manière agile, afin d'obtenir un résultat personnalisé qui est sûr de vous plaire.</p>
    <br>
    <h2><strong>POURQUOI NOUS ?</strong></h2>
    <p class="quo">Non seulement nous nous engageons à ce que notre service soit 100% satisfait ou remboursé, mais nous pouvons affirmer que notre solution est adaptée pour les 7 à 77 ans; pas de failles XSS ou d'injection SQL possible chez nous, la sécurité est primordiale, avec entre autres un chiffrage de bout en bout; des capteurs à la pointe de la technologie, connexion en fibre optique et robot sur-mesure à la clé.</p>
    
    
    <div class="resume">
        <div class="line_1">
        <div class="bulle">
            <div class="icon"><img src="../Media/bien.png" alt="simplicite"></div>
            <p><strong>Simplicité</strong></p>
            <p>Une interface simple d'utilisation</p>
        </div>
        
        <div class="bulle">
            <div class="icon"><img src="../Media/qualite.png" alt="qualite"></div>
            <p><strong>Qualité</strong></p>
            <p>Garantie satisfait ou refait</p>
        </div>

        <div class="bulle">
            <div class="icon"><img src="../Media/team.png" alt="engagement"></div>
            <p><strong>Engagement</strong></p>
            <p>Une équipe impliquée</p>
        </div>
        </div>

        <div class="line_2">
        <div class="bulle">
            <div class="icon"><img src="../Media/tech.png" alt="performance"></div>
            <p><strong>Performance</strong></p>
            <p>Une technologie dernier cri</p>
        </div>

        <div class="bulle">
            <div class="icon"><img src="../Media/securite.png" alt="securite"></div>
            <p><strong>Sécurité</strong></p>
            <p>Une sécurité sans failles</p>
        </div>
        </div>

    </div>
    </div>
    
</body>
</html>