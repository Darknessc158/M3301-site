<?php
require_once('../model/classAdherent/adherent.class.php');
require_once('../model/classAdherent/adherentDAO.class.php');


$adherents = new adherentDAO('../model/data/db');

$lesadh = $adherents->getLeBureau();

//var_dump($lesadh);

include('../view/autres/lebureau.view.php');
?>
