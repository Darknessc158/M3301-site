<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');
if(isset($_POST['valider'])){

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
