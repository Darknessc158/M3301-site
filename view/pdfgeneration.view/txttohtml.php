<?php

public function txt2html($chemin,$nomfichier):int
{
  if (fopen( $chemin,"r")) {
   $in=fopen( $chemin, "r" );
 }else {
   echo "i marche pas PD";
   return -1;
 }
  $out= fopen( $nomfichier,"x");

  $file = new SplFileObject("$nomfichier");

  while (!$file->eof()) {
    $ligne_courante = fgets($in);
    if (strpos($ligne_courante,'FieldName')) {

      $ligne_courante = explode('FieldName: ',$ligne_courante);
    printf('')
    }
  }



}



 ?>
