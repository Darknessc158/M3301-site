<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Chargement des données
function LoadData($file)
{
    // Lecture des lignes du fichier
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tableau simple
function BasicTable($header, $data)
{
    // En-tête
    foreach($header as $col)
        $this->Cell(25,7,$col,1);
    $this->Ln();
    // Données
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(25,7,$col,1);
        $this->Ln();
    }
}
}
$date = new DateTime();
$result = $date ->format('Y-m-d');
echo $result . "string";
$krr = explode('-',$result);
$result = implode("",$krr);



$filename = $result + 'azeazeaze';
echo $filename;



// $pdf = new PDF();
// $header = array('Quantite','Num Article','Description','Marque','Prix UTC','PrixTHC','PrixTTC');
// $data = $pdf->LoadData('temp_facture.txt');
// $pdf->SetFont('Arial','',10);
// $pdf->AddPage();
// $pdf->BasicTable($header,$data);
// $pdf->Output('I','resultat.pdf');


  ?>
