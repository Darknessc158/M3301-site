<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');

$name = $_POST['name']);
$address = $_POST['address']);
$city = $_POST['city']);
$phone = $_POST['phone']);


	if (!isset($name)) {
		 	$phone = "test";
	}
	if (!isset($address)) {
			$phone = "test";
	}
	if (!isset($city)) {
		 	$phone = "test";
	}
	if (!isset($phone)) {
		$phone = "test";
	}

	echo "oui";
	$fields = array(
		'name'    => $name,
		'address' => $address,
		'city'    => $city,
		'phone'   =>  $phone
	);

	$pdf = new FPDM('template.pdf');
	$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
	$pdf->Merge();
//	$chemin = "../../FichierPDF/PDFRemplie";
	$pdf->Output();



}

?>
