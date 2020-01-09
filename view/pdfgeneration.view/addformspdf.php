<?php

require 'setuptraitement.php';
require 'txtohtml_v3.php';


function addform($chemin_extraction_fields='exemple.txt',
$cheminformulaire='chemin_formulaire'
,$nomformulaire='traitement_exemple',
$sortie_frontend='FORMSfront_end.html',
$template_formulaire='fichier.pdf' ,
$sortie_backend='FORMSback_end.php'){


setuptraitement($template_formulaire,$chemin_extraction_fields,$sortie_backend);
txt2html($chemin_extraction_fields,$nomformulaire,$sortie_frontend);





}




 ?>
