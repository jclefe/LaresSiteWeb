<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Valeurs capteurs</title>
        <link rel="stylesheet" href="../Style.css" />
    </head>

 	<body class="VueCapteur">
 	<?php include '../Annexe/menu.php';?> 
         <div class="conteneurCapteur">    
            
              <form>
                <p class="titreCapteur">Veuillez choisir une pièce :
                <select name="piece" id="piece">
                     <option value="france">France</option>
                     <option value="espagne">Espagne</option>
                     <option value="italie">Italie</option>
                     <option value="royaume-uni">Royaume-Uni</option>
                     <option value="canada">Canada</option>
                     <option value="etats-unis">États-Unis</option>
                     <option value="chine">Chine</option>
                     <option value="japon">Japon</option>
                </select>
                </p> 
              </form>



           
            <div class="deux">
                <div class="trois">
                  <div class="un">
                    <img src="../Media/drop.png">
                    <p>Taux d'humidité</p>                  
                  </div>
                  <p class="test">23%</p><!--//////////////////////////////////////////////-->
                </div>  

               <div class="trois"> 
                  <div class="un">
                    <img src="../Media/light-bulb.png">
                    <p>Luminosité</p>                
                  </div>  
                  <p class="test">54%</p><!--//////////////////////////////////////////////-->
               </div>   

              <div class="trois">  
                  <div class="un">
                    <img src="../Media/thief.png">
                    <p>Présence ?</p>            
                  </div>  
                  <p class="test">Oui</p><!--//////////////////////////////////////////////-->
              </div>    
            </div>

            <div class="deux">
              <div class="trois"> 
                  <div class="un">
                    <img src="../Media/blinds.png">
                    <p>Volets ouverts?</p>              
                  </div>  
                  <p class="test">Oui</p><!--//////////////////////////////////////////////-->
              </div>    
            
              <div class="trois"> 
                  <div class="un">
                    <img src="../Media/thermometer.png">                
                    <p>Thermomètre</p>                
                  </div>  
                  <p class="test">21.5°C</p><!--//////////////////////////////////////////////-->
              </div>
              
              <div class="trois">     
                  <div class="un">
                    <img src="../Media/flame.png">
                    <p>Fumée ?</p>                
                  </div>
                  <p class="test">Non</p><!--//////////////////////////////////////////////-->
              </div>    
  </div>
        </div>
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
  background-color: rgba(0,0,0,0.9);
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
  border: 1px solid grey;
  border-radius: 20px;
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



</style>