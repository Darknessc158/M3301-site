<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');


	if (!isset( $_POST['name'])) {
		 $_POST['name'])=" frank ";
	}
	if (!isset(  $_POST['address'])) {
		 $_POST['address'])=" ocean ";
	}
	if (!isset( $_POST['city'])) {
		 $_POST['city'])="didier ";
	}
	if (!isset( $_POST['phone'])) {
		 $_POST['phone'])=" ti pipe ";
	}
	echo "oui";
	$fields = array(
		'name'    => $_POST['name'],
		'address' =>  $_POST['address'],
		'city'    =>  $_POST['city'],
		'phone'   =>  $_POST['phone']
	);

	$pdf = new FPDM('template.pdf');
	$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
	$pdf->Merge();
//	$chemin = "../../FichierPDF/PDFRemplie";
	$pdf->Output();



}

?>
