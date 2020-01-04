<?php


 function txt2html($chemin='exemple.txt',$nomfichier='exemple.txt',$cheminformulaire='chemin_formulaire',$nomformulaire='nom_formulaire'):int
{
  if (fopen( $chemin,"r")) {
   $in=fopen( $chemin, "r" );
 }else {
   echo "i marche pas PD";
   return -1;
 }

//Crée le formulaire avec le chemin vers le controleur adapté
printf('<div id="%s">
<form class="" actiona="../../controleur/pdf/%s.php" method="post" autocomplete="on
">',$nomformulaire,$nomformulaire);

$ligne_courante = fgets($in);
  while (!feof($in) ) {
    //detect la présence de la chaine 'FIeldname'
    if (strpos($ligne_courante,'FieldName')!==false) {
      //Methode generique pour du text


      //Enleve le surplus de la chaine et la en fait un input en html
      $ligne_courante = explode('FieldName:',$ligne_courante);
      $ligne_courante = implode($ligne_courante);
      $ligne_courante = rtrim($ligne_courante);



      printf('<p>%s :<br/>
      <input list="%s" type="text" name="%s"/>
      </p>',$ligne_courante,$ligne_courante,$ligne_courante);


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

  return 0;

}

//test
txt2html();




 ?>
