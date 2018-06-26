<?php session_start()?>
<html>
<header>
	<title>Profile settings</title>
	<link rel="stylesheet" href="vues.inscription1.css">
</header>
<body>  
<?php require '../Annexe/ModeleMonProfil.php';?>
<div class="global">
		<h1>Fill in the fields you would like to modify </h1>    
		<?php $nom=getNamebyLogin($_SESSION['login'])['name'];$prenom=getNamebyLogin($_SESSION['login'])['firstname']; ?>
        <form method="POST" action="ControleurInscription.php"> <!--  /////////////////////////////////////////// -->
                <h2>Basic information</h2>            
                <div class="conteneur">
                  <?php  echo '<input class="inputclassique" type="text" placeholder='.$nom.' name="nom" id="nom"/> '?>
                  <?php  echo '<input class="inputclassique" type="text" placeholder='.$prenom.' name="prenom" id="prenom"/>'?>
                  <?php  echo '<input class="inputclassique" id="e-mail" type="text" placeholder='.$_SESSION['login'].' name="mail" id="mail"/>'?>                
                    <input type="password" class="inputclassique" placeholder="Ancien mot de passe" name="password"/>
                    <input type="password" class="inputclassique" placeholder="Nouveau mot de passe (8 caract min)" name="password" id="password"/>
                    <input type="password" class="inputclassique" placeholder="Confirmer le mot de passe" name="passwordcheck" id="passwordcheck"/>          	
                </div>        	
                <h2>Address</h2>            
                <div class="conteneur">
                    <?php echo '<input type="text" class="inputclassique" placeholder='.getAddressbyLogin($_SESSION['login'])['address'] .'name="numbernameadress" id="numbernameadress" />'?>
                    <?php echo '<input type="text" class="inputclassique" placeholder='.getAddressbyLogin($_SESSION['login'])['zip'] .' name="postalcode" id="postalcode" />'?>
                    <?php echo '<input type="text" class="inputclassique" placeholder='.getAddressbyLogin($_SESSION['login'])['town'] . 'name="city" id="city"/>' ?>
                    <?php echo '<input type="text" class="inputclassique" placeholder='. getSuperficieFromLogin($_SESSION['login']) .'m²'.' name="taille" id="taille"/>' ?>   
                </div>  
                <h2>Add another user to your place</h2>
                <h3 style="text-align:center; font-family:Trebuchet MS;font-size:1em; font-weight:normal">Please fill in all the followinng fields if you wish to add another user</h3>
                <div class="conteneur">
                    <input class="inputclassique" type="text" placeholder="Nom" name="nom" id="nom"/>
                	<input class="inputclassique" type="text" placeholder="Prénom" name="prenom" id="prenom"/>
                	<input class="inputclassique" id="e-mail" type="text" placeholder="E-mail" name="mail" id="mail"/>                
                    <div id="genre">
                        <label class="textinput">Sex</label>
                        <input type="radio" name="gender" id="gender1" value="M" checked><label for="gender1" class="textinput">Homme</label> 
                        <input type="radio" name="gender" id="gender2" value="F"><label for="gender2"class="textinput">Femme</label>
                    </div>
                    <input type="password" class="inputclassique" placeholder="Mot de passe (8 caract min)" name="password" id="password"/>
                    <input type="password" class="inputclassique" placeholder="Confirmer le mot de passe" name="passwordcheck" id="passwordcheck"/>
                    <div id="genre">
                        <label class="textinput">Child?</label>
                        <input type="radio" name="restrict" id="restrict1" value="0" checked><label for="restrict1" class="textinput">Yes</label> 
                        <input type="radio" name="restrict" id="restrict2" value="1"><label for="restrict2"class="textinput">No</label>
                    </div>
                    <input class="inputclassiqu" id="e-mail" type="text" id="mail" disabled/>
                    <div id="retour">                     
                    		<button type="submit" name="submit" id="inscrire" class="textinput">Send</button>
                    		<a href="../Mes_donnees/VueValeurCapteur.php" class="textinput">Back</a>
                    </div>
                </div>          
        </form>                                                
    
</div>
</body>

<style>
body{
	background-image:url("../Media/login.jpg");
	background-position: center center;
	background-attachment: fixed;
}

.inputclassiqu{
    opacity:0;
    margin-bottom: 25px;
    width: 250px;
}

h1 {
    text-align: center;
    border: 2px solid black;
    border-radius: 0px 0px 60px 60px;
    background-color: rgba(8, 90, 160, 0.36);
    font-family: Trebuchet MS;
    padding: 16px 16px;
    color: white;
    font-weight:500;
    font-size:1.5em;
    width:65%;
    margin-left:auto;
    margin-right:auto;
}

h2 {
    border-radius: 0 40px 0 40px;
    margin: 2% 30%;
    background-color: rgba(8, 90, 160, 0.36);
    font-family: Trebuchet MS;
    padding: 14px 16px;
    text-align: center;
    border: 1px solid black;
    color: white;
    font-weight:500;
    
}


.conteneur {
	margin: auto;
	width: 40%;
	border: none;
	display: flex;
    flex-wrap: wrap;
	flex-direction: line;
	justify-content: space-around;
}

td {
	text-align: left;
}

#genre {
    border-radius: 15px;
    box-sizing: border-box;
    background-color: white;
    padding: 12px 20px;
    width: 250px;
    margin: 8px 0;
    margin-bottom: 25px;
    font-family: Arial,sans-serif;
    font-size: 15px;
}

.inputclassique {
	width: 250px;
	border: none;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border-radius: 15px;
	font-size: 16px;
	margin-bottom: 25px;
    font-family: Arial,sans-serif;
}
.inputclassique placeholder{font-family: sans-serif;}

.textinput {
    color: grey;
    text-decoration: none;
    font-family: Trebuchet MS;
}
#retour {
    display: flex;
    width: 50%;
    justify-content: space-between;
    margin-top: 3vh;
}

button, a {
	border-radius: 10px;
	border: none;
	color: black;
	padding: 12px 26px;
	text-decoration: none;	
	cursor: pointer;
	background-color:white;
	font-family: Trebuchet MS;
	font-size: 0.9em;
}
</style>
</html>

