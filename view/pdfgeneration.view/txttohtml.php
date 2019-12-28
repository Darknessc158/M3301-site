<?php

public function txt2html($chemin,$nomfichier,$cheminformulaire):int
{
  if (fopen( $chemin,"r")) {
   $in=fopen( $chemin, "r" );
 }else {
   echo "i marche pas PD";
   return -1;
 }
  //$out= fopen( $nomfichier,"x");

  $file = new SplFileObject("$nomfichier");
echo '<div id="formulaire">
<form class="" action="../../model/fpdm/ex-array.php" method="post" autocomplete="off">
<p> Name :<br />
<input list="nom" type="text" name="name" placeholder="Name par defaut "/>
<datalist id="nom">
<option value="proposition nom 1 ">
<option value="proposition nom 2">
<option value="proposition nom 3">
<option value="proposition nom 4">
</datalist>
</p>';
  while (!$file->eof()) {
    $ligne_courante = fgets($in);
    if (strpos($ligne_courante,'FieldName')) {

      $ligne_courante = explode('FieldName: ',$ligne_courante);

    }
  }



}



 ?>
