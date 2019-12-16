<?php
require_once('../../model/classAdherent/adherent.class.php');
require_once('../../model/classAdherent/adherentDAO.class.php');
$config = parse_ini_file('../../config/config.ini');
$adherents = new adherentDAO($config['database_path']);

$lesadh = $adherents->getLesAdherents();


include('../../view/autres/lescoureurs.view.php');
?>
