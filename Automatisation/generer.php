<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm/fpdm.php');


$fields = array(
	'Nom'    => 'Jean',
	'Prenom' => 'François'
);

$pdf = new FPDM('yes.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();

?>
