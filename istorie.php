<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link href="css/stil.css" rel="stylesheet">
 <title>Arta mea</title>
 <link rel = "icon" href ="./images/icon.jpg"  type = "image/x-icon">
 <link rel="stylesheet" type="text/css" href="./index.css" />
 <style>
     body {font-family: "Times New Roman", Georgia, Serif;}
     h1, h2, h3, h4, h5, h6 {
       font-family: "Playfair Display";
       letter-spacing: 5px;
     }
     </style>
</head>
<body >
 <div class="w3-top">
     <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
       <a href="index.html" class="w3-bar-item w3-button">My art</a>
       <div class="w3-right w3-hide-small">
         <a href="istorie.php" class="w3-bar-item w3-button">Istoria artei</a>
         <a href="inceputurile.html" class="w3-bar-item w3-button">Începuturile</a>
         <a href="galerie.html" class="w3-bar-item w3-button">Galerie</a>
         <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
       </div>
     </div>
   </div>
   
   <div style="text-align:center" class="w3-row w3-padding-64">
    <h3 style =  "font-size: 300%"><b>Istoria artei </b></h3><br>
    <h5><i>Artiști și perioade din istoria artei care m-au influențat</i></h5>
    
    <!-- Definire cutii -->
<div class="w3-col l8 s12">
  <!-- prima cutie -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="./images/impresionism.jpg" class="w3-round w3-image  w3-hover-opacity" alt="Table Setting" width="1100" height="800" 
      onclick="document.getElementById('impresionism').style.display='block'">
     <div id="impresionism" class="w3-modal" onclick="this.style.display='none'">
         <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
         <div class="w3-modal-content w3-animate-zoom">
           <img src="./images/impresionism.jpg" style="width:100%">
         </div>
       </div>
    <div class="w3-container">
      <h3><b>Impresionismul</b></h3>
    </div>

    <div class="w3-container">
      <p><strong>Impresionismul</strong> este o mișcare artistică, manifestată la început în pictură care marchează desprinderea artei moderne de 
        academismul tradițional. Pictura impresionistă s-a dezvoltat în perioada cuprinsă între 1867 și 1886, 
        caracterizată prin concentrarea asupra impresiilor fugitive produse de o scenă sau de un obiect, asupra 
        mobilității fenomenelor, mai mult decât asupra aspectului stabil și conceptual al lucrurilor, preferând 
        pictura în aer liber și folosind o cromatică pură și tușeuri fine de penel pentru a simula lumina reală.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <a href="https://ro.wikipedia.org/wiki/Impresionism#Impresionismul_%C3%AEn_pictur%C4%83" class="w3-btn w3-white w3-border w3-border-blue w3-round">Citește mai mult »</a>
        </div>
      </div>
    </div>
  </div>
  <!-- a 2-a cutie -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="./images/romantism.jpg" class="w3-round w3-image  w3-hover-opacity" alt="Table Setting" width="1100" height="800" 
    onclick="document.getElementById('romantism').style.display='block'">
   <div id="romantism" class="w3-modal" onclick="this.style.display='none'">
       <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
       <div class="w3-modal-content w3-animate-zoom">
         <img src="./images/romantism.jpg" style="width:100%">
       </div>
     </div>
      <div class="w3-container">
        <h3><b>Romantism</b></h3>
      </div>
  
      <div class="w3-container">
        <p>Romantismul (numit și Perioada Romantică) a fost o mișcare artistică, literară și intelectuală apărută 
          în Europa pe la sfârșitul secolului al XVIII-lea, atingând apogeul pe la începutul anilor 1800.
           În mare parte, romantismul a fost o reacție atât împotriva Revoluției Industriale, cât și împotriva 
           normelor politice și sociale ale Iluminismului. Romantismul a influențat artele vizuale, literatura 
           și muzica, dar de asemenea a avut un impact și asupra istoriografiei, educației și istoriei naturale.</p>
        <div class="w3-row">
          <div class="w3-col m8 s12">
            <a href="https://ro.wikipedia.org/wiki/Romantism" class="w3-btn w3-white w3-border w3-border-blue w3-round">Citește mai mult »</a>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Artisti Card -->
   <div class="w3-col l4">
     <!--Prima-->
    <div class="w3-card w3-margin w3-margin-top">
      <img src="./images/148.jpg" class="w3-round w3-image  w3-hover-opacity" alt="Table Setting" width="400" height="600" 
      onclick="document.getElementById('modal01').style.display='block'">
     <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
         <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
         <div class="w3-modal-content w3-animate-zoom">
           <img src="./images/148.jpg" style="width:100%">
         </div>
       </div>
      <div class="w3-container w3-white">
        <h4><b>Alicia Aradilla</b></h4>
        <p>Alicia Aradilla este o ilustratoare care pictează peisaje în acuarelă. Ea este prima artistă care mi-a influențat
          viziunea despre artă.
        </p>
        <div class="w3-col m8 s12">
          <a href="https://aradilla.wixsite.com/alicia/about" class="w3-btn w3-white w3-border w3-border-green w3-round">Citește mai mult »</a>
        </div>
      </div>
   </div>
    <!--A doua-->
    <div class="w3-card w3-margin w3-margin-top">
      <img src="./images/sari.jpg" class="w3-round w3-image  w3-hover-opacity" alt="Table Setting" width="400" height="600" 
             onclick="document.getElementById('modal03').style.display='block'">
            <div id="modal03" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                  <img src="./images/sari.jpg" style="width:100%">
                </div>
              </div>
        <div class="w3-container w3-white">
          <h4><b>Sari Shryack</b></h4>
          <p>Sari Shryack este o pictoriță din Texas care mi-a atras atenția prin liniile puternice și curajul de a folosi culori puternice.
          </p>
          <div class="w3-col m8 s12">
            <a href="https://linktr.ee/notsorryart" class="w3-btn w3-white w3-border w3-border-green w3-round">Citește mai mult »</a>
          </div>
        </div>
      </div>

      <!--a treia-->
      <div class="w3-card w3-margin w3-margin-top">
          <div class="w3-container w3-white">
            <img src="./images/michael.jpg" class="w3-round w3-image  w3-hover-opacity" alt="Table Setting" width="400" height="600" 
             onclick="document.getElementById('modal02').style.display='block'">
            <div id="modal02" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                  <img src="./images/michael.jpg" style="width:100%">
                </div>
              </div>
            <h4><b>Michael Chamberlain</b></h4>
            <p>Acest pictor american mi-a atras atenția în special prin tehnica folosită, plein air. Artistul își strânge
              instrumentele și pleacă cu ele în natură pentru a picta peisajul în forma sa originală.
            </p>
            <div class="w3-col m8 s12 w3-container w3-right-align">
              <a href="https://www.studiogallerysf.com/city-streets-22" class="w3-btn w3-white w3-border w3-border-green w3-round w3-right-align">Citește mai mult »</a>
            </div>
          </div>
        </div>

  </div>
  <div class="w3-col l4">
  <div class="w3-card w3-margin w3-margin-top">
    <h3>Quiz despre istoria artei</h3>
  <!--INCEPUT MODAL CU QUIZ-->
  <button onclick="document.getElementById('Quiz').style.display='block'" class="w3-button w3-black">Începe quiz</button>

  <div id="Quiz" class="w3-modal">
   <div class="w3-modal-content w3-card-4 w3-animate-zoom">
   <!--Quizul in sine-->
  
  <div id="page-wrap">

		<h1>Quiz despre istoria artei</h1>
		
		<form action="" method="post">
		
            <ol>
            
                <li>
                
                    <h3>Care este perioada în care s-a manifestat impresionismul?</h3>
                    
                    <div>
                        <input type="radio" name="intrebare-1-raspuns" id="intrebare-1-raspuns-A" value="A" />
                        <label for="intrebare-1-raspuns-A">A) secolul XVIII</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-1-raspuns" id="intrebare-1-raspuns-B" value="B" />
                        <label for="intrebare-1-raspuns-B">B) 1867-1889</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-1-raspuns" id="intrebare-1-raspuns-C" value="C" />
                        <label for="intrebare-1-raspuns-C">C) Perioada interbelică</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-1-raspuns" id="intrebare-1-raspuns-D" value="D" />
                        <label for="intrebare-1-raspuns-D">D) Niciuna dintre variante</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Din ce stat american este Sari Shryack?</h3>
                    
                    <div>
                        <input type="radio" name="intrebare-2-raspuns" id="intrebare-2-raspuns-A" value="A" />
                        <label for="intrebare-2-raspuns-A">A) Texas</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-2-raspuns" id="intrebare-2-raspuns-B" value="B" />
                        <label for="intrebare-2-raspuns-B">B) Tennesse</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-2-raspuns" id="intrebare-2-raspuns-C" value="C" />
                        <label for="intrebare-2-raspuns-C">C) Ohio</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-2-raspuns" id="intrebare-2-raspuns-D" value="D" />
                        <label for="intrebare-2-raspuns-D">D) New York</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Care este primul artist care mi-a influențat stilul pictural?</h3>
                    
                    <div>
                        <input type="radio" name="intrebare-3-raspuns" id="intrebare-3-raspuns-A" value="A" />
                        <label for="intrebare-3-raspuns-A">A) Michael Chamberlain</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-3-raspuns" id="intrebare-3-raspuns-B" value="B" />
                        <label for="intrebare-3-raspuns-B">B) Sari Sharick</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-3-raspuns" id="intrebare-3-raspuns-C" value="C" />
                        <label for="intrebare-3-raspuns-C">C) Alicia Aradilla</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-3-raspuns" id="intrebare-3-raspuns-D" value="D" />
                        <label for="intrebare-3-raspuns-D">D) Niciunul de mai sus</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Care artist folosește tehnica plein air?</h3>
                    
                    <div>
                        <input type="radio" name="intrebare-4-raspuns" id="intrebare-4-raspuns-A" value="A" />
                        <label for="intrebare-4-raspuns-A">A) Sari Sharick</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-4-raspuns" id="intrebare-4-raspuns-B" value="B" />
                        <label for="intrebare-4-raspuns-B">B) Alicia Aridilla</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-4-raspuns" id="intrebare-4-raspuns-C" value="C" />
                        <label for="intrebare-4-raspuns-C">C) Michelangelo</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-4-raspuns" id="intrebare-4-raspuns-D" value="D" />
                        <label for="intrebare-4-raspuns-D">D) Michael Chamberlain</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Romantismul se mai numește și</h3>
                    
                    <div>
                        <input type="radio" name="intrebare-5-raspuns" id="intrebare-5-raspuns-A" value="A" />
                        <label for="intrebare-5-raspuns-A">A) Perioada Romantică</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-5-raspuns" id="intrebare-5-raspuns-B" value="B" />
                        <label for="intrebare-5-raspuns-B">B) Revoluția Industrială</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-5-raspuns" id="intrebare-5-raspuns-C" value="C" />
                        <label for="intrebare-5-raspuns-C">C) Impresionism</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="intrebare-5-raspuns" id="intrebare-5-raspuns-D" value="D" />
                        <label for="intrebare-5-raspuns-D">D) Clasicism</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
  
	
    <!--final quiz-->
    <div class="w3-container w3-light-grey w3-padding">
      <button class="w3-button w3-right w3-white w3-border" 
      onclick="document.getElementById('Quiz').style.display='none'">Închide</button>
     </div>
    </div>
   </div>

  <!--FINAL MODAL CU QUIZ-->
  <div id="grade">		
        <?php
            ini_set('display_errors', 0);
            ini_set('display_startup_errors', 0);
            error_reporting(-1);

            $answer1 = $_POST['intrebare-1-raspuns'];
            $answer2 = $_POST['intrebare-2-raspuns'];
            $answer3 = $_POST['intrebare-3-raspuns'];
            $answer4 = $_POST['intrebare-4-raspuns'];
            $answer5 = $_POST['intrebare-5-raspuns'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            
            echo "<br><div style='font-size:20px' id='results'>Momentan ai răspuns corect la $totalCorrect / 5 întrebări.</div>";
            
        ?>
	
	</div>

    </div>
    </div>
<hr>
  <p class="w3-center">©2022 by Chiș Roxana</p>
 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <!-- <script>
      function myFunction(x) {
        x.classList.toggle("fa-thumbs-down");
      }
    </script> -->
</body>
</html>