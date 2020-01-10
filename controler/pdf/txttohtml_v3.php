<?php

//chemin = $chemin_extraction_fields
//sortie = sortie front_end
//entree = nom_fichier_backend
 function txt2html($chemin='exemple.txt',$cheminbackend='traitement_exemple',$sortie='poubelle/formulaire_generer3.html'):int
{
  if (fopen( $chemin,"r")) {
   $in=fopen( $chemin, "r" );
 }else {
   echo("i marche pas PD");
   return -1;
 }

 $out = fopen($sortie,'x+');
 fwrite($out,'<?php'.PHP_EOL);


fwrite($out, '<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}
body {
  background-color: #f1f1f1;
}
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>');
//Crée le formulaire avec le chemin vers le controleur adapté
// printf('<form id="regForm" class="" action="../../controler/pdf/%s.php" method="post" autocomplete="on
// ">',$cheminbackend,$cheminbackend);
fwrite($out,'<form id="regForm" class="" action="../'.$cheminbackend.'" method="post" autocomplete="on">');


$ligne_courante = fgets($in);
$nb=0;
$total =1;
$fin=false;
  while (!feof($in) ) {
    //detect la présence de la chaine 'FIeldname'
    if (strpos($ligne_courante,'FieldName')!==false) {
      //Methode generique pour du text


      //Enleve le surplus de la chaine et la en fait un input en html
      $ligne_courante = explode('FieldName:',$ligne_courante);
      $ligne_courante = implode($ligne_courante);
      $ligne_courante = rtrim($ligne_courante);
      if($nb==0){
      // printf('<div class="tab">Onglet %d:',$total) ;
      fwrite($out,'<div class="tab">Onglet %d:'.$total.PHP_EOL);
      $fin=false;
      }
      if ($nb <4) {
        // printf('<p>%s :
        // <input list="%s" type="text" name="%s" oninput="this.className = \'\'"/>
        // </p>',$ligne_courante,$ligne_courante,$ligne_courante);
        fwrite($out,'<p>'.$ligne_courante.' :<input list="'.$ligne_courante.'s" type="text" name="'.$ligne_courante.'" oninput="this.className = \'\'"/>
        </p>'.PHP_EOL);
        $nb++;
        $fin=false;
      }
      else{
        fwrite($out,'<p>'.$ligne_courante.' :<input list="'.$ligne_courante.'s" type="text" name="'.$ligne_courante.'" oninput="this.className = \'\'"/>
        </p>'.PHP_EOL);
        fwrite($out, '</div> <br>'.PHP_EOL);
        $nb=0;
        $total++;
        $fin=true;
      }
    }

$ligne_courante = fgets($in);
  }
    //Ca depend , trouver un moyen de verifier que nb modulo 5 diff de 0
  // normalement c bon
    if ($nb<=5 && $fin==false) {
      fwrite($out, '</div>'.PHP_EOL);
    }

    $total++;

fwrite($out, '
<div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->

  <div style="text-align:center;margin-top:40px;">
  '.PHP_EOL);
    for ($i=1; $i < $total ; $i++) {
      fwrite($out, '<span class="step"></span>'.PHP_EOL);
    }

    // <span class="step"></span>
    // <span class="step"></span>
    // <span class="step"></span>
    // <span class="step"></span>


fwrite($out, '
</div>
</form>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = true;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>'.PHP_EOL);

  return 7;

}

//test
//txt2html();




 ?>
