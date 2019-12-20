<?php

/***************************
  Sample using a PHP array
****************************/

require('../fpdm/fpdm.php');

$fields = array(
	'NOM'    => 'Franki.Vincent@gmail.com',
	'PRENOM' => 'yes',
	'ADRESSE' => '12345',
	'cb_homme' => 'yes',
	'cb_femme' => 'yes',
);

$pdf = new FPDM('cb_compatible.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
//$PDFname

$pdf->Output();

?>
