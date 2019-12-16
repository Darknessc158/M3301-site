<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');

if($_GET['modele']='exemple'){
  if(isset($_POST['valider'])){

    if (!isset($_POST['name']))$name = $_POST['name'];
   else $name = ' ';

   if (!isset($_POST['address']))$address = $_POST['address'];
  else $address = ' ';

  if (!isset($_POST['city']))$city = $_POST['city'];
  else $city = ' ';

  if (!isset($_POST['phone']))$phone = $_POST['phone'];
  else $phone = ' ';

  
    $fields = array(
  		'name'    => $name,
  		'address' =>  $address,
  		'city'    =>  $city,
  		'phone'   =>  $phone
  	);

  	$pdf = new FPDM('template.pdf');
  	$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
  	$pdf->Merge();
  //	$chemin = "../../FichierPDF/PDFRemplie";
  	$pdf->Output();



  }
}


?>
