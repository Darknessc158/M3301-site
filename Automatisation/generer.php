<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm/fpdm.php');


$fields = array(
	'NOM'    => 'Nom',
	'PRENOM' => 'Prenom'
);

$pdf = new FPDM('essaie.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();

?>
