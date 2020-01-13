<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
/*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
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
  font-family: 'Poppins', sans-serif;
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
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
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
                    <a href="#">Organiser une course(en cours de developpement)</a>
                </li>
                <li>
                    <a href="../../view/viewformulaire/main.view.formulaire.php">Remplire PDF Administratif</a>
                </li>

            </ul>
        </div>
        <div class="Boite">
          <p>Club</p>
          <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="../../controler/tableadherent/tableadherent.ctrl.php">Gerer les membres</a>
                </li>
                <li>
                    <a href="#">Contacter adherent(en cours de developpement)</a>
                </li>

            </ul>
        </div>
        <div class="Boite">
          <p>Actualité</p>
          <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                  <a href="../../view/actualite/ajouterarticles.view.php" >Ajouter un Article</a>
                </li>
                <li>
                  <a href="../../controler/actualite/tablepublication.ctrl.php">Modifier/Supprimer un Article</a>
                </li>
                <li>
                    <a href="#">Classement(en cours de developpement)</a>
                </li>

            </ul>
        </div>
        <div class="Boite">
          <p>Boutique</p>
          <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="../../controler/tablearticle/tablearticle.ctrl.php">Gérer les stocks</a>
                </li>
                <li>
                    <a href="#">Facture(en cours de developpement)</a>
                </li>
                <li>
                  <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php">Gérer les transactions</a>
                </li>

            </ul>
        </div>
        <div class="Boite">
          <p>Site</p>
          <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="../page administrateur/admin.view.php">Menu Administrateur</a>
                </li>
                <li>
                    <a href="#">Statistique(en cours de developpement)</a>
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
        //window.open(url,'_blank'); truc de base
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
if ($value!='..' && $value !='.') {
if($value!='main.view.formulaire.php'){
  $file = $path_parts['filename'].PHP_EOL;
  echo '<option value="'.$file.'.php">'.$file.'</option>'.PHP_EOL;
}
else {
  $file = $path_parts['filename'].PHP_EOL;
  echo '<option value="'.$file.'.php"> menu remplissage PDF</option>'.PHP_EOL;
}

}
}
         ?>
        </SELECT>
        <h2>Remplissage du formulaire de Responsabilite civil</h2>
      </FORM>  <div id="boiteformetpdf">

            <div id="formulaire">
            <form id="regForm" class="" action="../../controler/pdf/traitementformulaire/TRAITEMENTresponsabilitecivil.php" method="post" autocomplete="on"><div class="tab">Onglet:1
<p> CODEPOSTAL :<input list="CODEPOSTALs" type="text" name=" CODEPOSTAL" oninput="this.className = ''"/>
  <datalist id="CODEPOSTALs">
                   <option value="38000">
                   <option value="38130">
                   </datalist>
        </p>
<p> MAIL :<input list="MAILs" type="text" name=" MAIL" oninput="this.className = ''"/>
  <datalist id="MAILs">
                   <option value="isa.glenaz@orange.fr">
                   <option value="laurent.glenaz@orange.fr">
                   </datalist>
        </p>
<p> VILLE :<input list="VILLEs" type="text" name=" VILLE" oninput="this.className = ''"/>
  <datalist id="VILLEs">
                   <option value="Echirolle">
                   <option value="Grenoble">
                   </datalist>
        </p>
<p> NOMPERSONNEMORAL :<input list="NOMPERSONNEMORALs" type="text" name=" NOMPERSONNEMORAL" oninput="this.className = ''"/>
  <datalist id="NOMREPRESENTANTs">
                   <option value="Emile RAJON">
                   <option value="Isabelle GLENAZ">
                   <option value="Laurent GLENAZ">
                   <option value="Laurent SUGNY">
                   <option value="Patrice VIALZ">
                   <option value="Damien PARA">
                   <option value="Jacques VIAL">
                   </datalist>
        </p>
<p> NOMREPRESENTANT :<input list="NOMREPRESENTANTs" type="text" name=" NOMREPRESENTANT" oninput="this.className = ''"/>
  <datalist id="NOMREPRESENTANTs">
                   <option value="Emile RAJON">
                   <option value="Isabelle GLENAZ">
                   <option value="Laurent GLENAZ">
                   <option value="Laurent SUGNY">
                   <option value="Patrice VIALZ">
                   <option value="Damien PARA">
                   <option value="Jacques VIAL">

                   </datalist>
        </p>
        </p>
</div> <br>
<div class="tab">Onglet:2
<p> NOM_APPELATION :<input list=" NOM_APPELATIONs" type="text" name=" NOM_APPELATION" oninput="this.className = ''"/>
        </p>
<p> CB1 :<input list=" CB1s" type="text" name=" CB1" oninput="this.className = ''"/>
        </p>
<p> DATEMANIF :<input list=" DATEMANIFs" type="text" name=" DATEMANIF" oninput="this.className = ''"/>
        </p>
<p> FORFAIT :<input list=" FORFAITs" type="text" name=" FORFAIT" oninput="this.className = ''"/>
        </p>
<p> FORFAITJ2 :<input list=" FORFAITJ2s" type="text" name=" FORFAITJ2" oninput="this.className = ''"/>
        </p>
</div> <br>
<div class="tab">Onglet:3
<p> NBPARTICIPANT :<input list=" NBPARTICIPANTs" type="text" name=" NBPARTICIPANT" oninput="this.className = ''"/>
        </p>
<p> FORFAIT2 :<input list=" FORFAIT2s" type="text" name=" FORFAIT2" oninput="this.className = ''"/>
        </p>
<p> NBPARTICIPANTJ1 :<input list=" NBPARTICIPANTJ1s" type="text" name=" NBPARTICIPANTJ1" oninput="this.className = ''"/>
        </p>
<p> NBPARTICIPANTJ2 :<input list=" NBPARTICIPANTJ2s" type="text" name=" NBPARTICIPANTJ2" oninput="this.className = ''"/>
        </p>
<p> FORFAITJ1 :<input list=" FORFAITJ1s" type="text" name=" FORFAITJ1" oninput="this.className = ''"/>
        </p>
</div> <br>
<div class="tab">Onglet:4
<p> FORFAITJ2B :<input list=" FORFAITJ2Bs" type="text" name=" FORFAITJ2B" oninput="this.className = ''"/>
        </p>
<p> TOTAL :<input list=" TOTALs" type="text" name=" TOTAL" oninput="this.className = ''"/>
        </p>
<p> FORFAITJ1B :<input list=" FORFAITJ1Bs" type="text" name=" FORFAITJ1B" oninput="this.className = ''"/>
        </p>
<p> NOMCLUB :<input list=" NOMCLUBs" type="text" name=" NOMCLUB" oninput="this.className = ''"/>
        </p>
<p> DATE :<input list=" DATEs" type="text" name=" DATE" oninput="this.className = ''"/>
        </p>
</div> <br>
<div class="tab">Onglet:5
<p> LIEUX :<input list=" LIEUXs" type="text" name=" LIEUX" oninput="this.className = ''"/>
        </p>
<p> NUMCAP :<input list=" NUMCAPs" type="text" name=" NUMCAP" oninput="this.className = ''"/>
        </p>
<p> NUMAFFILIATION :<input list=" NUMAFFILIATIONs" type="text" name=" NUMAFFILIATION" oninput="this.className = ''"/>
        </p>
<p> TOTAL2 :<input list=" TOTAL2s" type="text" name=" TOTAL2" oninput="this.className = ''"/>
        </p>
<p> LIEUX_MANIF :<input list=" LIEUX_MANIFs" type="text" name=" LIEUX_MANIF" oninput="this.className = ''"/>
        </p>
</div> <br>
<div class="tab">Onglet:6
<p> CB2 :<input list=" CB2s" type="text" name=" CB2" oninput="this.className = ''"/>
        </p>
<p> CB3 :<input list=" CB3s" type="text" name=" CB3" oninput="this.className = ''"/>
        </p>
<p> CB4 :<input list=" CB4s" type="text" name=" CB4" oninput="this.className = ''"/>
        </p>
<p> CB5 :<input list=" CB5s" type="text" name=" CB5" oninput="this.className = ''"/>
        </p>
<p> CB6 :<input list=" CB6s" type="text" name=" CB6" oninput="this.className = ''"/>
        </p>
</div> <br>
<div class="tab">Onglet:7
<p> CB7 :<input list=" CB7s" type="text" name=" CB7" oninput="this.className = ''"/>
        </p>
<p> CB8 :<input list=" CB8s" type="text" name=" CB8" oninput="this.className = ''"/>
        </p>
<p> CB9 :<input list=" CB9s" type="text" name=" CB9" oninput="this.className = ''"/>
        </p>
<p> CB10 :<input list=" CB10s" type="text" name=" CB10" oninput="this.className = ''"/>
        </p>
<p> CB11 :<input list=" CB11s" type="text" name=" CB11" oninput="this.className = ''"/>
        </p>
</div> <br>
<div class="tab">Onglet:8
<p> CB12 :<input list=" CB12s" type="text" name=" CB12" oninput="this.className = ''"/>
        </p>
<p> CB13 :<input list=" CB13s" type="text" name=" CB13" oninput="this.className = ''"/>
        </p>
<p> CB14 :<input list=" CB14s" type="text" name=" CB14" oninput="this.className = ''"/>
        </p>
<p> CB15 :<input list=" CB15s" type="text" name=" CB15" oninput="this.className = ''"/>
        </p>
<p> CB16 :<input list=" CB16s" type="text" name=" CB16" oninput="this.className = ''"/>
        </p>
</div> <br>
<div class="tab">Onglet:9
<p> CB17 :<input list=" CB17s" type="text" name=" CB17" oninput="this.className = ''"/>
        </p>
<p> NBPARTICIPANT_bis :<input list=" NBPARTICIPANT_biss" type="text" name=" NBPARTICIPANT_bis" oninput="this.className = ''"/>
        </p>
<p> NBPARTICIPANTJ1_bis :<input list=" NBPARTICIPANTJ1_biss" type="text" name=" NBPARTICIPANTJ1_bis" oninput="this.className = ''"/>
        </p>
<p> NBPARTICIPANTJ2_bis :<input list=" NBPARTICIPANTJ2_biss" type="text" name=" NBPARTICIPANTJ2_bis" oninput="this.className = ''"/>
        </p>
</div>

<div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->

  <div style="text-align:center;margin-top:40px;">

<span class="step"></span>
<span class="step"></span>
<span class="step"></span>
<span class="step"></span>
<span class="step"></span>
<span class="step"></span>
<span class="step"></span>
<span class="step"></span>
<span class="step"></span>

</div>
</form>
</div>

          <div class="pdf">
            <h3>Fichier PDF avec les champs correspondant à ceux dans le formulaire </h3>
          <embed src=../../model/data/pdf/template/Responsabilite_civil-Visionneur.pdf width=800 height=730 type='application/pdf'/>

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
</html>
