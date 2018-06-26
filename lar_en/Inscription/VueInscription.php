<html>
<header>
	<title>Subscription to LARES</title>
	<link rel="stylesheet" href="vues.inscription1.css">
</header>
<body>
    

<script type=text/javascript>
function verif() {
	if(document.getElementById('nom').value == '' || document.getElementById('prenom').value == '' || document.getElementById('mail').value == '' || document.getElementById('numbernameadress').value == '' || document.getElementById('city').value == '' || document.getElementById('postalcode').value == '' || document.getElementById('password').value == '' || document.getElementById('passwordcheck').value == '' | document.getElementById('taille').value == ''){
		alert('Veuillez remplir tous les champs');
		return false;
	} 
	else { return true; }
	}
</script>

    
<div class="global">
		<h1>Fill in the following fields to further your subscription to LARES</h1>    
        <form method="POST" action="ControleurInscription.php">
                <h2>Basic information</h2>            
                <div class="conteneur">
                    <input class="inputclassique" type="text" placeholder="Nom" name="nom" id="nom"/>
                	<input class="inputclassique" type="text" placeholder="Prénom" name="prenom" id="prenom"/>
                	<input class="inputclassique" id="e-mail" type="text" placeholder="E-mail" name="mail" id="mail"/>                
                    <div id="genre">
                        <label class="textinput">Sex</label>
                        <input type="radio" name="gender" id="gender1" value="M" checked><label for="gender1" class="textinput">Man</label> 
                        <input type="radio" name="gender" id="gender2" value="F"><label for="gender2"class="textinput">Woman</label>
                    </div>
                    <input type="password" class="inputclassique" placeholder="Mot de passe (8 caract min)" name="password" id="password"/>
                    <input type="password" class="inputclassique" placeholder="Confirmer le mot de passe" name="passwordcheck" id="passwordcheck"/>          	
                </div>        	
                <h2>Address</h2>            
                <div class="conteneur">
                    <input type="text" class="inputclassique" placeholder="Numéro et nom de la rue" name="numbernameadress" id="numbernameadress" />
                    <input type="text" class="inputclassique" placeholder="Code Postal" name="postalcode" id="postalcode" />
                    <input type="text" class="inputclassique" placeholder="Ville" name="city" id="city"/>
                    <input type="text" class="inputclassique" placeholder="Taille du logement en m²" name="taille" id="taille"/>   
                    <div id="retour">                     
                    		<button type="submit" name="submit" onClick='verif()'  class="textinput" id="inscrire">Submit</button>
                    		<a href="../Connexion/VueConnexion.php" class="textinput">Back</a>
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

