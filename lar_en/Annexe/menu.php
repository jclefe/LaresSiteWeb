<html>
<style>
.barreNoire
{
    background-color: rgba(0,0,0,0.8); 
    width: 100%;
    height:9vh;
    position: fixed;	
    top:0px;
    left:0px;
    display:flex;
    justify-content:space-between; 
    align-items: center;
}

.boutons
{
    width:170vh;
    display:flex;
    justify-content:space-around;
    order:2;
}

.Accueil ,.Profil, .Deconnexion, .Contact, .Apropos
{

	padding-left: 0vh;
}

.endroit_logo
{
    width:15vh;
    order:1;
}

.endroit_logo img
{
	width:23vh;
	height:10.5vh;
	padding-left: 3vh;

}

.drapeau
{
    order:3;
    display: flex;
    flex-direction: column-reverse;
    justify-content: space-around;
    margin-right: 6vh;
}
.ang
{
	width:4vh;
	height:4vh;
}
.fr
{
	width:4vh;
	height:2.4vh;
	margin-top: 1vh;
} 

.barreNoire a:active
{
	color:black;
}
.barreNoire a
{
	color: white;
	text-decoration: none;
	font-family: 'Tajawal', sans-serif;
	font-size: 1.2em;
}

.barreNoire a:hover
{
	border-bottom: 1px solid white;
	padding-bottom: 0.5vh;
	animation-duration: 0.3s;
	animation-name: deco_menu;
}

 @keyframes deco_menu {
  from {
    border-bottom: 0px solid white; 
    padding-bottom: 0px;
  }

  to {
    border-bottom: 1px solid white; 
    padding-bottom: 0.5vh;
  }
}




 .sidenav, .dropdown-container
{
	display: flex;
	flex-direction: column;
	justify-content: flex-start;
}

.sidenav
{
	top:9vh;
	left: 0px;
	position: fixed;
	height: 93vh;
	width: 37vh;
	background-color: rgba(0,0,0,0.8);
	align-items: center;         
}


.dropdown-container
{
	height: 20vh;
	width: 90%;
	border-top: 1px solid white;
	margin-top: 10px;
}        

.lien_menu
{
	margin-top: 2vh;
	text-decoration: none;
	font-family: Trebuchet MS;
	font-size: 0.85em;
	color: white;
}

.lien_menu:active
{
	color: black;
}
.sidenav a:hover
{
	 text-decoration: underline; 
}
.dropdown-btn
{
	width: 70%;
	height: 4vh;
	margin-left: auto;
	margin-right: auto;
	background: none;
	font-family: 'Tajawal', sans-serif;
	border: none;
	//border-bottom: 1px solid white;
	//padding-bottom: 5vh;
	font-size: 1.2em;
	margin-top: 1vh;
	cursor: pointer;
	color: white;
}

.dropdown-container:hover
{
	border-bottom: 1px solid rgba(255,255,255,0);
	padding-bottom: 5vh;
	animation-duration: 0.3s;
	animation-name: deco_titre_menu;
}

    @keyframes deco_titre_menu
{
	from
	{
	    border-bottom: 0px solid rgba(255,255,255,0); 
	    padding-bottom: 0px;
	}
	
	to 
	{
	    border-bottom: 1px solid rgba(255,255,255,0); 
	    padding-bottom: 5vh;
	}
}
</style>	 
	 	<div class="barreNoire">
		 	<nav class="boutons">
		 		<ul class="Accueil"><a href="../Mes_donnees/VueValeurCapteur">Accueil</a></ul>
				<ul class="Profil"><a href="../Annexe/VueMonProfil.php">Mon profil</a></ul>
			 	<ul class="Contact"><a href="#">Contact</a></ul>
				<ul class="Apropos"><a href="../Annexe/aPropos.php">A propos</a></ul>
				<ul class="Deconnexion"><a href="../Annexe/Controleur.php">Déconnexion</a></ul>
			</nav>	
			 <div class="endroit_logo">
				<img src="../Media/log.png" alt="Photo du logo" />				
			</div>
			<div class="drapeau">
		 		<img src="../Media/drapeau ang.png" alt="Photo du logo" class="ang" />
				<img src="../Media/drapeau fr.png" alt="Photo du logo" class="fr"/>
			</div>
	 	</div>
	 	<div class="sidenav">
		  <button class="dropdown-btn">Mes données<i class="fa fa-caret-down"></i> </button>
		  	<div class="dropdown-container">
			    <a class="lien_menu" href="../Mes_donnees/VueValeurCapteur">Valeurs capteurs</a>
			    <a class="lien_menu" href="#">Etats actionneurs</a>
			</div>
		  <button class="dropdown-btn">Mon logement<i class="fa fa-caret-down"></i> </button>
		      <div class="dropdown-container">
			    <a class="lien_menu" href="../Mon_logement/VueInfoLogement.php">Informations logement</a>
			    <a class="lien_menu" href="../Mon_logement/VueModifierPiece.php">Ajouter ou supprimer des pièces</a>
			    <a class="lien_menu" href="../Mon_logement/VueAjoutCapteur1.php">Ajouter ou supprimer des capteurs</a>
			  </div>
		  <button class="dropdown-btn">Statistiques<i class="fa fa-caret-down"></i> </button>
			  <div class="dropdown-container">
			    <a class="lien_menu" href="#">Historique valeurs</a>
			    <a class="lien_menu" href="#">Comparaison à d'autres foyers</a>
			  </div>
		</div>
</html>