<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm/fpdm.php');


$fields = array(
	'NOM'    => 'random@gmail.com',
	'PRENOM' => 'randomtown',
	'ADRESSE' => '12345'
);

$pdf = new FPDM('document/doc_faitmain/Sanstitre.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output("D", "formulaire_remplie.pdf");

?>
