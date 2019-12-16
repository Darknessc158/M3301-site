<?php
require_once('../model/classAdherent/adherent.class.php');
require_once('../model/classAdherent/adherentDAO.class.php');


$adherents = new adherentDAO('../model/data/db');

$lesadh = $adherents->getLesAdherents();

var_dump($lesadh);

include('../view/autres/lescoureurs.view.php');
?>
