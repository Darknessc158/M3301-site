<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <style media="screen">
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
  </style>
  <title> Formulaire</title>
</head>
<body>

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
        <option value="formulairePDF.php?name=exemple">Exemple </option>
        <option value="formulairePDF.php">Doc 1 pas encore disponible </option>
        <option value="formulairePDF.php">Doc 2 pas encore disponible </option>
        <option value="formulairePDF.php">Doc 3 pas encore disponible </option>
      </SELECT>
    </FORM>





    <?php
    //aussi la possibilité d'utiliser https://www.w3schools.com/howto/howto_js_autocomplete.asp
    if (isset($_GET['name'])){
      if($_GET['name']=='exemple'){
        printf(' <h2>Formulaire du PDF %s  </h2>',$_GET['name']) ;
        echo '

        <div class="boite formetpdf">
        <div class="formulaire">
        <form class="" action="../../model/fpdm/ex-array.php" method="post" autocomplete="off">
        <p> Name :<br />
        <input list="nom" type="text" name="name" />
        <datalist id="nom">
        <option value="proposition nom 1 ">
        <option value="proposition nom 2">
        <option value="proposition nom 3">
        <option value="proposition nom 4">
        </datalist>
        </p>
        
        <p>Address :<br />
        <input list="address" type="text" name="address" />
        <datalist id="address">
        <option value="proposition adresse 1 ">
        <option value="proposition adresse 2">
        <option value="proposition adresse 3">
        <option value="proposition adresse 4">
        <option value="45 rue du zouk">
        <option value="289 rue des exemples ">
        </datalist>
        </p>

        <p>City :<br />
        <input list="city" type="text" name="city" />
        <datalist id="city">
        <option value="proposition city 1 ">
        <option value="proposition city 2">
        <option value="proposition city 3">
        <option value="proposition city 4">
        </datalist>
        </p>

        <p>Phone :<br />
        <input type="phone" name="phone" list="phone"/>
        <datalist id="phone">
        <option tittle="numero ded la mairie" value="0614786532">
        <option value="0614457889">
        <option value="0614125678">
        <option value="0614152648">
        </datalist>
        </p>

        <div class="Bouton">
        <INPUT TYPE="submit" NAME="valider" VALUE="Valider">
        <INPUT TYPE="reset" NAME="reset" VALUE="Reinitialiser">
        </div>
        </form>
        </div>

        <div class="pdf">

        <embed src=../../model/fpdm/template.pdf width=800 height=500 type=\'application/pdf\'/>

        </div>
        </div>

        ';
      }

    }
    else {
      echo "Ce document PDF n'est pas encore disponible";
    }
    ?>

  </body>
  </html>
