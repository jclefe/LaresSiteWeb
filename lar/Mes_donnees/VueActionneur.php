<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Valeurs capteurs</title>
        <link rel="stylesheet" href="../Style.css" />
    </head>

 	<body class="VueCapteur">
 	<?php include '../Annexe/menu.php';?> 
 	<?php /*require 'ModeleAccueil.php'*/?>
 	<form method='post' action='ModeleActionneur.php'>
         <div class="conteneurCapteur">                                   
            <div class="deux">
                <div class="trois">
                    <button class='butt' name='lum1' value='1008E2011111AA'>Allumer Lumiere 1</button>               
                </div>  

               <div class="trois"> 
                    <button class='butt' name='lum2' value='1008E2012222AE'>Allumer Lumiere 2</button>                
               </div>   

              <div class="trois">  
                    <button class='butt' name='voletH' value='1008E2014444B6'>Ouvrir Volet</button>           
              </div>    
            </div>

            <div class="deux">
              <div class="trois"> 
                    <button class='butt' name='downlum' value='1008E2010000A6'>Eteindre lumiere</button>            
              </div>    
            
              <div class="trois"> 
                    <button class='butt' name='voletL' value='1008E2015555BA'>Fermer volet</button>               
              </div>
              
              <div class="trois">     
                    <button class='butt' name='lum3' name='lum3' value='1008E2013333B2'>Allumer lumiere 3</button>              
              </div>    
  </div>
        </div>
        </form>
 	</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Dosis');
.test{
  font-family: 'Dosis', sans-serif;
  font-size: 2.5em;
  padding-left: 9%;
  //color: white;
}
p
{
  font-family: 'Dosis', sans-serif;
  font-size: 1.1em;
}
.un{
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  color: white;
  height: 100%;
  width: 50%;
  //background-color: rgba(0,0,0,0.9);
  border-radius: 20px 5px 5px 20px; 
  align-items: center;
}
.un img{
  width: 30%;
  height: 5vh;
}
	

.deux{
  display: flex;
  width: 100%;
  justify-content: space-around; 
  font-size: 0.9em; 
}
.trois
{
  display: flex;
  align-items: center;
  //border: 1px solid grey;
  //border-radius: 20px;
  width:30%;
  //height:20vh;
  height: 15vh;
  justify-content: flex-start;
}


.conteneurCapteur
{
  display: flex;
  flex-direction: column;
  height: 65vh;
  width: 55%;
  align-items: center;
  justify-content: space-around;
  background-color: rgba(255,255,255,0.9);
  margin-left: 30%;
  margin-top: 25vh;
}


.VueCapteur
{
  background-image: url("../Media/back.jpg");
  background-size: 230vh 100vh;
}
.titreCapteur
{
  font-size: 1.2em;
  font-weight: normal;
  text-align: center;
  margin-top: 3vh;
  font-family: Trebuchet MS;
}

#piece
{
  height: 5.5vh;
  width: 25vh;
  border-radius:10px;
  padding-left: 2vh;
  font-family: Trebuchet MS;
}
.butt{
    font-family: Trebuchet MS;
    border-radius: 20px;
    border: 1px solid grey;
    font-size: 1.2em;
    width: 150%;
    height: 20vh;
    font-weight: bold;
    cursor: pointer;
}



</style>