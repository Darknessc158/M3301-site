<?php
if (empty($_POST[' CODEPOSTAL']))$name ='$ CODEPOSTAL';else $name = $_POST[' CODEPOSTAL'];
if (empty($_POST[' MAIL']))$name ='$ MAIL';else $name = $_POST[' MAIL'];
if (empty($_POST[' VILLE']))$name ='$ VILLE';else $name = $_POST[' VILLE'];
if (empty($_POST[' NOMPERSONNEMORAL']))$name ='$ NOMPERSONNEMORAL';else $name = $_POST[' NOMPERSONNEMORAL'];
if (empty($_POST[' NUMAFFILIATION8']))$name ='$ NUMAFFILIATION8';else $name = $_POST[' NUMAFFILIATION8'];
if (empty($_POST[' NOMREPRESENTANT']))$name ='$ NOMREPRESENTANT';else $name = $_POST[' NOMREPRESENTANT'];
if (empty($_POST[' NOM_APPELATION']))$name ='$ NOM_APPELATION';else $name = $_POST[' NOM_APPELATION'];
if (empty($_POST[' LIEUX MANIF']))$name ='$ LIEUX MANIF';else $name = $_POST[' LIEUX MANIF'];
if (empty($_POST[' CB1']))$name ='$ CB1';else $name = $_POST[' CB1'];
if (empty($_POST[' DATEMANIF']))$name ='$ DATEMANIF';else $name = $_POST[' DATEMANIF'];
if (empty($_POST[' FORFAIT']))$name ='$ FORFAIT';else $name = $_POST[' FORFAIT'];
if (empty($_POST[' FORFAITJ2']))$name ='$ FORFAITJ2';else $name = $_POST[' FORFAITJ2'];
if (empty($_POST[' NBPARTICIPANT']))$name ='$ NBPARTICIPANT';else $name = $_POST[' NBPARTICIPANT'];
if (empty($_POST[' FORFAIT2']))$name ='$ FORFAIT2';else $name = $_POST[' FORFAIT2'];
if (empty($_POST[' NBPARTICIPANTJ1']))$name ='$ NBPARTICIPANTJ1';else $name = $_POST[' NBPARTICIPANTJ1'];
if (empty($_POST[' NBPARTICIPANTJ2']))$name ='$ NBPARTICIPANTJ2';else $name = $_POST[' NBPARTICIPANTJ2'];
if (empty($_POST[' FORFAITJ1']))$name ='$ FORFAITJ1';else $name = $_POST[' FORFAITJ1'];
if (empty($_POST[' FORFAITJ2B']))$name ='$ FORFAITJ2B';else $name = $_POST[' FORFAITJ2B'];
if (empty($_POST[' TOTAL']))$name ='$ TOTAL';else $name = $_POST[' TOTAL'];
if (empty($_POST[' FORFAITJ1B']))$name ='$ FORFAITJ1B';else $name = $_POST[' FORFAITJ1B'];
if (empty($_POST[' NOMCLUB']))$name ='$ NOMCLUB';else $name = $_POST[' NOMCLUB'];
if (empty($_POST[' DATE']))$name ='$ DATE';else $name = $_POST[' DATE'];
if (empty($_POST[' LIEUX']))$name ='$ LIEUX';else $name = $_POST[' LIEUX'];
$fields = array(
' CODEPOSTAL'   => $ CODEPOSTAL,
' MAIL'   => $ MAIL,
' VILLE'   => $ VILLE,
' NOMPERSONNEMORAL'   => $ NOMPERSONNEMORAL,
' NUMAFFILIATION8'   => $ NUMAFFILIATION8,
' NOMREPRESENTANT'   => $ NOMREPRESENTANT,
' NOM_APPELATION'   => $ NOM_APPELATION,
' LIEUX MANIF'   => $ LIEUX MANIF,
' CB1'   => $ CB1,
' DATEMANIF'   => $ DATEMANIF,
' FORFAIT'   => $ FORFAIT,
' FORFAITJ2'   => $ FORFAITJ2,
' NBPARTICIPANT'   => $ NBPARTICIPANT,
' FORFAIT2'   => $ FORFAIT2,
' NBPARTICIPANTJ1'   => $ NBPARTICIPANTJ1,
' NBPARTICIPANTJ2'   => $ NBPARTICIPANTJ2,
' FORFAITJ1'   => $ FORFAITJ1,
' FORFAITJ2B'   => $ FORFAITJ2B,
' TOTAL'   => $ TOTAL,
' FORFAITJ1B'   => $ FORFAITJ1B,
' NOMCLUB'   => $ NOMCLUB,
' DATE'   => $ DATE,
' LIEUX'   => $ LIEUX
); $pdf = new FPDM('template.php');
   $pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
   $pdf->Merge();
 //	$chemin = "../../FichierPDF/PDFRemplie";
   $pdf->Output(); ?>