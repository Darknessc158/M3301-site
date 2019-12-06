<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm/fpdm.php');


$fields = array(
	'MAIL'    => 'Franki.Vincent@gmail.com',
	'VILLE' => 'randomtown',
	'CODEPOSTAL' => '12345',
	'NOMREPRESENTANT' => 'Franki Vincent '
);

$pdf = new FPDM('doc_compa.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output("D", "formulaire_remplie.pdf");

?>
