<?php

require 'setuptraitement.php';
require 'txtohtml_v4.php';


function addform($chemin_extraction_fields,$template_formulaire,$sortie_frontend,$sortie_backend){
setuptraitement($template_formulaire,$chemin_extraction_fields,$sortie_backend);
txt2html($template_formulaire,$chemin_extraction_fields,$sortie_backend,$sortie_frontend);







}

addform('../../model/data/pdf/template/attribut_Responsabilitecivil.txt','Responsabilite_civil.pdf','../../view/viewformulaire/responsabilite civil.php','traitementformulaire/TRAITEMENTresponsabilitecivil.php');
addform('../../model/data/pdf/template/attribut_template.txt','template.pdf','../../view/viewformulaire/exemple.php','traitementformulaire/TRAITEMENTexemple.php');

 ?>
