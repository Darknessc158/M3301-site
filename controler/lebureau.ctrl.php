<?php
require_once('../model/classAdherent/adherent.class.php');
require_once('../model/classAdherent/adherentDAO.class.php');


$adherents = new adherentDAO('../model/data/db');

$lesadh = $adherents->getLeBureau();

include('../view/autres/lebureau.view.php');
?>
