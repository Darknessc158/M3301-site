<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.ctrl.php");
    exit;
}

include('../../view/page administrateur/admin.view.php');
?>
