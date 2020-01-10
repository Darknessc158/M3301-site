<?php require('../../../model/fpdm/fpdm.php');
if (empty($_POST['CODEPOSTAL']))$CODEPOSTAL =' ';
else $CODEPOSTAL = $_POST['CODEPOSTAL'];

if (empty($_POST['MAIL']))$MAIL =' ';
else $MAIL = $_POST['MAIL'];

if (empty($_POST['VILLE']))$VILLE =' ';
else $VILLE = $_POST['VILLE'];

if (empty($_POST['NOMPERSONNEMORAL']))$NOMPERSONNEMORAL =' ';
else $NOMPERSONNEMORAL = $_POST['NOMPERSONNEMORAL'];

if (empty($_POST['NOMREPRESENTANT']))$NOMREPRESENTANT =' ';
else $NOMREPRESENTANT = $_POST['NOMREPRESENTANT'];

if (empty($_POST['NOM_APPELATION']))$NOM_APPELATION =' ';
else $NOM_APPELATION = $_POST['NOM_APPELATION'];

if (empty($_POST['CB1']))$CB1 =' ';
else $CB1 = $_POST['CB1'];

if (empty($_POST['DATEMANIF']))$DATEMANIF =' ';
else $DATEMANIF = $_POST['DATEMANIF'];

if (empty($_POST['FORFAIT']))$FORFAIT =' ';
else $FORFAIT = $_POST['FORFAIT'];

if (empty($_POST['FORFAITJ2']))$FORFAITJ2 =' ';
else $FORFAITJ2 = $_POST['FORFAITJ2'];

if (empty($_POST['NBPARTICIPANT']))$NBPARTICIPANT =' ';
else $NBPARTICIPANT = $_POST['NBPARTICIPANT'];

if (empty($_POST['FORFAIT2']))$FORFAIT2 =' ';
else $FORFAIT2 = $_POST['FORFAIT2'];

if (empty($_POST['NBPARTICIPANTJ1']))$NBPARTICIPANTJ1 =' ';
else $NBPARTICIPANTJ1 = $_POST['NBPARTICIPANTJ1'];

if (empty($_POST['NBPARTICIPANTJ2']))$NBPARTICIPANTJ2 =' ';
else $NBPARTICIPANTJ2 = $_POST['NBPARTICIPANTJ2'];

if (empty($_POST['FORFAITJ1']))$FORFAITJ1 =' ';
else $FORFAITJ1 = $_POST['FORFAITJ1'];

if (empty($_POST['FORFAITJ2B']))$FORFAITJ2B =' ';
else $FORFAITJ2B = $_POST['FORFAITJ2B'];

if (empty($_POST['TOTAL']))$TOTAL =' ';
else $TOTAL = $_POST['TOTAL'];

if (empty($_POST['FORFAITJ1B']))$FORFAITJ1B =' ';
else $FORFAITJ1B = $_POST['FORFAITJ1B'];

if (empty($_POST['NOMCLUB']))$NOMCLUB =' ';
else $NOMCLUB = $_POST['NOMCLUB'];

if (empty($_POST['DATE']))$DATE =' ';
else $DATE = $_POST['DATE'];

if (empty($_POST['LIEUX']))$LIEUX =' ';
else $LIEUX = $_POST['LIEUX'];

if (empty($_POST['NUMCAP']))$NUMCAP =' ';
else $NUMCAP = $_POST['NUMCAP'];

if (empty($_POST['NUMAFFILIATION']))$NUMAFFILIATION =' ';
else $NUMAFFILIATION = $_POST['NUMAFFILIATION'];

if (empty($_POST['TOTAL2']))$TOTAL2 =' ';
else $TOTAL2 = $_POST['TOTAL2'];

if (empty($_POST['LIEUX_MANIF']))$LIEUX_MANIF =' ';
else $LIEUX_MANIF = $_POST['LIEUX_MANIF'];

if (empty($_POST['CB2']))$CB2 =' ';
else $CB2 = $_POST['CB2'];

if (empty($_POST['CB3']))$CB3 =' ';
else $CB3 = $_POST['CB3'];

if (empty($_POST['CB4']))$CB4 =' ';
else $CB4 = $_POST['CB4'];

if (empty($_POST['CB5']))$CB5 =' ';
else $CB5 = $_POST['CB5'];

if (empty($_POST['CB6']))$CB6 =' ';
else $CB6 = $_POST['CB6'];

if (empty($_POST['CB7']))$CB7 =' ';
else $CB7 = $_POST['CB7'];

if (empty($_POST['CB8']))$CB8 =' ';
else $CB8 = $_POST['CB8'];

if (empty($_POST['CB9']))$CB9 =' ';
else $CB9 = $_POST['CB9'];

if (empty($_POST['CB10']))$CB10 =' ';
else $CB10 = $_POST['CB10'];

if (empty($_POST['CB11']))$CB11 =' ';
else $CB11 = $_POST['CB11'];

if (empty($_POST['CB12']))$CB12 =' ';
else $CB12 = $_POST['CB12'];

if (empty($_POST['CB13']))$CB13 =' ';
else $CB13 = $_POST['CB13'];

if (empty($_POST['CB14']))$CB14 =' ';
else $CB14 = $_POST['CB14'];

if (empty($_POST['CB15']))$CB15 =' ';
else $CB15 = $_POST['CB15'];

if (empty($_POST['CB16']))$CB16 =' ';
else $CB16 = $_POST['CB16'];

if (empty($_POST['CB17']))$CB17 =' ';
else $CB17 = $_POST['CB17'];

if (empty($_POST['NBPARTICIPANT_bis']))$NBPARTICIPANT_bis =' ';
else $NBPARTICIPANT_bis = $_POST['NBPARTICIPANT_bis'];

if (empty($_POST['NBPARTICIPANTJ1_bis']))$NBPARTICIPANTJ1_bis =' ';
else $NBPARTICIPANTJ1_bis = $_POST['NBPARTICIPANTJ1_bis'];

if (empty($_POST['NBPARTICIPANTJ2_bis']))$NBPARTICIPANTJ2_bis =' ';
else $NBPARTICIPANTJ2_bis = $_POST['NBPARTICIPANTJ2_bis'];

$fields = array(
'CODEPOSTAL'   => $CODEPOSTAL,
'MAIL'   => $MAIL,
'VILLE'   => $VILLE,
'NOMPERSONNEMORAL'   => $NOMPERSONNEMORAL,
'NOMREPRESENTANT'   => $NOMREPRESENTANT,
'NOM_APPELATION'   => $NOM_APPELATION,
'CB1'   => $CB1,
'DATEMANIF'   => $DATEMANIF,
'FORFAIT'   => $FORFAIT,
'FORFAITJ2'   => $FORFAITJ2,
'NBPARTICIPANT'   => $NBPARTICIPANT,
'FORFAIT2'   => $FORFAIT2,
'NBPARTICIPANTJ1'   => $NBPARTICIPANTJ1,
'NBPARTICIPANTJ2'   => $NBPARTICIPANTJ2,
'FORFAITJ1'   => $FORFAITJ1,
'FORFAITJ2B'   => $FORFAITJ2B,
'TOTAL'   => $TOTAL,
'FORFAITJ1B'   => $FORFAITJ1B,
'NOMCLUB'   => $NOMCLUB,
'DATE'   => $DATE,
'LIEUX'   => $LIEUX,
'NUMCAP'   => $NUMCAP,
'NUMAFFILIATION'   => $NUMAFFILIATION,
'TOTAL2'   => $TOTAL2,
'LIEUX_MANIF'   => $LIEUX_MANIF,
'CB2'   => $CB2,
'CB3'   => $CB3,
'CB4'   => $CB4,
'CB5'   => $CB5,
'CB6'   => $CB6,
'CB7'   => $CB7,
'CB8'   => $CB8,
'CB9'   => $CB9,
'CB10'   => $CB10,
'CB11'   => $CB11,
'CB12'   => $CB12,
'CB13'   => $CB13,
'CB14'   => $CB14,
'CB15'   => $CB15,
'CB16'   => $CB16,
'CB17'   => $CB17,
'NBPARTICIPANT_bis'   => $NBPARTICIPANT_bis,
'NBPARTICIPANTJ1_bis'   => $NBPARTICIPANTJ1_bis,
'NBPARTICIPANTJ2_bis'   => $NBPARTICIPANTJ2_bis
); $pdf = new FPDM('pdf.pdf');
   $pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
   $pdf->Merge();
 //	$chemin = "../../FichierPDF/PDFRemplie";
   $pdf->Output(); ?>