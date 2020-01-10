<?php

require 'setuptraitement.php';
require 'txtohtml_v3.php';


function addform($chemin_extraction_fields='exemple.txt',
$template_formulaire='fichier.pdf' ,
$sortie_frontend='RESULTATaddformspdf/FORMSfront_end.html',
$sortie_backend='RESULTATaddformspdf/FORMSback_end.php'){


setuptraitement($template_formulaire,$chemin_extraction_fields,$sortie_backend);
txt2html($chemin_extraction_fields,$sortie_backend,$sortie_frontend);





}

addform('attribut_pdf.txt','pdf.pdf');


 ?>
