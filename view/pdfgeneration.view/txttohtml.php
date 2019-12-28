<?php


public function txt2html($chemin='exemple.txt',$nomfichier='exemple.txt',$cheminformulaire='chemin_formulaire',$nomformulaire='nom_formulaire'):int
{
  if (fopen( $chemin,"r")) {
   $in=fopen( $chemin, "r" );
 }else {
   echo "i marche pas PD";
   return -1;
 }
  //$out= fopen( $nomfichier,"x");

  $file = new SplFileObject("$nomfichier");


//Crée le formulaire avec le chemin vers le controleur adapté
printf('<div id="%s">
<form class="" action="../../controleur/pdf/%s.php" method="post" autocomplete="on
">',$nomformulaire);


  while (!$file->eof()) {

    if (strpos($ligne_courante,'FieldName')) {
      //Methode generique pour du text
      $ligne_courante = explode('FieldName:',$ligne_courante);
      $txt = strtolower($ligne_courante);
      printf('<p>%s :<br />
      <input list="%s" type="text" name="%s"  />
      </p>',$ligne_courante,$ligne_courante,$txt);
      // implementer un if pour créer des checkbox
      //Mais a convertir dans le controleur pour transformer en 'X'
    }
    $ligne_courante = fgets($in);
  }

echo ' <div class="Bouton">
  <INPUT TYPE="submit" NAME="valider" VALUE="Valider">
  <INPUT TYPE="reset" NAME="reset" VALUE="Reinitialiser">
  </div>
  </form>';

}

//test
txt2html()




 ?>
