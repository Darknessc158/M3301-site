<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');

if($_GET['modele']='exemple'){
  if(isset($_POST['valider'])){

    if (empty($_POST['name']))$name =' ' ;
   else $name = $_POST['name'];

   if (empty($_POST['address']))$address =' ' ;
  else $address = $_POST['address'];

  if (empty($_POST['city']))$city =' ';
  else $city =  $_POST['city'];

  if (empty($_POST['phone']))$phone = ' ';
  else $phone =  $_POST['phone'];


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
