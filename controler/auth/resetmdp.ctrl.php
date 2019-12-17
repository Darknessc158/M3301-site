<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.ctrl.php");
    exit;
}

require_once "configAuth.ctrl.php";


$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate new password
    echo "mot de passe :".var_dump($new_password); 
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Veuillez entrer le nouveau mot de passe";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Le mot de passe doit comporter aux moins 6 caracteres.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validation du mot de passe
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Veuillez confirmer le mot de passe";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Les mots de passes sont different";
        }
    }

    // verification des erreurs de saisie
    if(empty($new_password_err) && empty($confirm_password_err)){
        $sql = "UPDATE users SET password = ? WHERE id = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

            if(mysqli_stmt_execute($stmt)){
                // mot de passe changer et destruction de la session, redirection vers la page login
                session_destroy();
                header("location: login.ctrl.php");
                exit;
            } else{
                echo "Erreur, Veuillez reessayer";
            }
        }

        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
include('../../view/autres/resetmdp.view.php');
?>
