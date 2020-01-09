<?php
//template = chemin du template
// chemin = chemin du fichier extraction field
//sortie = chemin du fichier backend
function setuptraitement($template , $chemin='exemple.txt',$sortie='poubelle/res6.php'):int
{
  if (fopen( $chemin,"r")) {
   $in=fopen( $chemin, "r" );
 }else {
   echo "i marche pas PD";
   return -1;
 }

 $out = fopen($sortie,'x+');
fwrite($out,'<?php'.PHP_EOL);
 $ligne_courante = fgets($in);
 $array_of_array = array();
   while (!feof($in) ) {
     //detect la présence de la chaine 'FIeldname'
     if (strpos($ligne_courante,'FieldName')!==false) {
       //Methode generique pour du text


       //Enleve le surplus de la chaine
       //PB il y a un espace avant les caracteres
       $ligne_courante = explode('FieldName:',$ligne_courante);
       $ligne_courante = implode($ligne_courante);
       $ligne_courante = rtrim($ligne_courante);
       $ligne_courante = trim($ligne_courante);
       //ca ne marche pas { $ligne_courante[0]='\0'; }

       //sans la virgul a la fin
       $line_array = '\''.$ligne_courante.'\'   => $'.$ligne_courante;
       array_push($array_of_array,$line_array);

       $line_if = 'if (empty($_POST[\''.$ligne_courante.'\']))$name =\'$'.$ligne_courante.PHP_EOL.'\';else $name = $_POST[\''.$ligne_courante.'\'];';
       fwrite($out,$line_if.PHP_EOL);
     }

 $ligne_courante = fgets($in);
   }

   fwrite($out,'$fields = array('.PHP_EOL);

   foreach ($array_of_array as $key => $value) {
      //si c'est le dernier de la liste ne pas mettre de virgule
     if($key == count($array_of_array)-1) fwrite($out,$value.PHP_EOL);
     //sinon en mettre
     else fwrite($out,$value.','.PHP_EOL);
   }

   $fin = '); $pdf = new FPDM(\''.$template.'\');
   $pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
   $pdf->Merge();
 //	$chemin = "../../FichierPDF/PDFRemplie";
   $pdf->Output(); ?>';

  fwrite($out,$fin);
  fclose($out);
  fclose($in);
}
//il faut faire des saut de ligne car c'est illisible
setuptraitement('template.php');




 ?>
