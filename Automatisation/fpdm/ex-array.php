<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');

$fields = array(
	'name'    => 'JOSUMEO',
	'address' => '45 RUE DES RUES ',
	'city'    => 'My city',
	'phone'   => 'My phone number'
);

$pdf = new FPDM('template.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();
?>
