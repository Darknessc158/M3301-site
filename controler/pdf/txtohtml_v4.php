<?php

//chemin = $chemin_extraction_fields
//sortie = sortie front_end
//entree = nom_fichier_backend
 function txt2html($template='template.pdf',$chemin='attribut_pdf.txt',$cheminbackend='traitement_exemple',$sortie='poubelle/V4_test.php'):int
{
  if (fopen( $chemin,"r")) {
   $in=fopen( $chemin, "r" );
 }else {
   echo("i marche pas PD");
   return -1;
 }

 $out = fopen($sortie,'x+');



fwrite($out, '<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
/*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: \'Poppins\', sans-serif;
    background: #fafafa;
}

p {
    font-family: \'Poppins\', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}



#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #374a67;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #374a67;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #374a67;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #374a67;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}

body {
  font-family: \'Poppins\', sans-serif;
  background: #fafafa;
}
@media (max-width: 768px) {
  #sidebar {
      margin-left: -250px;
  }
  #sidebar.active {
      margin-left: 0;
  }
}
ul{
list-style: none;
}
#formulaire{
padding: 100px;
}
#pdf {
padding: 100px;
width: auto;

}
#boiteformetpdf {
  display: flex;
  align-items: center;

}

#content {
padding-left:  100px;
}

.formulaire {
  display: inline;
  float: left;
  margin: auto;
}
.pdf{
  display: inline;
  float: right ;
  margin: auto;
}
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
<body>
<script>
$(document).ready(function () {
        $(\'#sidebarCollapse\').on(\'click\', function () {
            $(\'#sidebar\').toggleClass(\'active\');
        });
    });
</script>

<div class="wrapper">

  <nav id="sidebar">

        <h3>Menu du mode admin </h3>

      <ul class="list-unstyled components">
          <div class="Boite">
            <p>Administratif</p>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li>
                      <a href="#">Organiser une course</a>
                  </li>
                  <li>
                      <a href="#">Document Administratif</a>
                  </li>

              </ul>
          </div>
          <div class="Boite">
            <p>Club</p>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li>
                      <a href="#">Gerer les membres</a>
                  </li>
                  <li>
                      <a href="#">Contacter adherent</a>
                  </li>

              </ul>
          </div>
          <div class="Boite">
            <p>Blog</p>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li>
                      <a href="#">Article</a>
                  </li>
                  <li>
                      <a href="#">Photo</a>
                  </li>
                  <li>
                      <a href="#">Classement</a>
                  </li>
                  <li>
                      <a href="#">Annonce</a>
                  </li>
              </ul>
          </div>
          <div class="Boite">
            <p>Boutique</p>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li>
                      <a href="#">Gerer Stock</a>
                  </li>
                  <li>
                      <a href="#">Facture</a>
                  </li>
                  <li>
                      <a href="#">Commande</a>
                  </li>

              </ul>
          </div>
          <div class="Boite">
            <p>Site</p>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li>
                      <a href="#">Parametre generaux</a>
                  </li>
                  <li>
                      <a href="#">Statistique</a>
                  </li>
              </ul>
          </div>
       </ul>
  </nav>

  <div id="content">


    <script language="JavaScript">
    function ChangeUrl(formulaire)
    {
      if (formulaire.ListeUrl.selectedIndex != 0)
      {
        var url ;
        url = formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value;
        //window.open(url,\'_blank\'); truc de base
        // nouveauté : (et i marche )
        window.location.href=url;
      }
    }

    </script>
    <FORM >
      <h3>Liste des PDF </h3>
      <SELECT NAME="ListeUrl" SIZE=1 onChange="ChangeUrl(this.form)"  >
        <OPTION SELECTED VALUE="">-Menu Déroulant De Liens-</option>
        <?php
$dir =".";
$scan = scandir($dir);
foreach ($scan as $key => $value) {
$path_parts = pathinfo($value);
if ($path_parts[\'extension\']=\'php\') {
$file = $path_parts[\'filename\'].PHP_EOL;
echo \'<option value="\'.$file.\'.php">\'.$file.\'. </option>\'.PHP_EOL;
}
}
         ?>
        </SELECT>
      </FORM>');
//Crée le formulaire avec le chemin vers le controleur adapté
// printf('<form id="regForm" class="" action="../../controler/pdf/%s.php" method="post" autocomplete="on
// ">',$cheminbackend,$cheminbackend);
fwrite($out,'  <div id="boiteformetpdf">
            <div id="formulaire">
            <form id="regForm" class="" action="../../controler/pdf/'.$cheminbackend.'" method="post" autocomplete="on">');


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
</div>

          <div class="pdf">

          <embed src=../../model/data/pdf/template/'.$template.' width=800 height=500 type=\'application/pdf\'/>

          </div>
          </div>
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





 ?>
