<?php

require 'setuptraitement.php';
require 'txtohtml_v4.php';


function addform($chemin_extraction_fields,$template_formulaire,$sortie_frontend,$sortie_backend){
setuptraitement($template_formulaire,$chemin_extraction_fields,$sortie_backend);
txt2html($template_formulaire,$chemin_extraction_fields,$sortie_backend,$sortie_frontend);





}

addform('../../model/data/pdf/attribut_Responsabilitecivil.txt','../../model/data/pdf/Responsabilite_civil.pdf','../../view/viewformulaire/responsabilite+civil.php','../../controler/pdf/traitementformulaire/TRAITEMENTresponsabilite+civil.php');
addform('../../model/data/pdf/attribut_template.txt','../../model/data/pdf/template.pdf','../../view/viewformulaire/exemple.php','../../controler/pdf/traitementformulaire/TRAITEMENTexemple.php');

 ?>
