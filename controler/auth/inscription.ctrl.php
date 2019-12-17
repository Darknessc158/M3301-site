<?php

require_once "configAuth.ctrl.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST['username']))) {
    $username_err = "Veuillez entrez votre adresse email";
  }else{
    $sql = "SELECT id FROM users WHERE username = ?";
    if ($stmt = mysqli_prepare($link, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username = trim($_POST["username"]);
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt) == 1){
          $username_err = "Cette email a deja un compte";
        }else{
          $username = trim($_POST["username"]);
        }

      }else{
        echo "erreur, recommencez";

      }
    }
    mysqli_stmt_close($stmt);

  }
  //validation du mot de $password_err
  if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Veuillez re-entrer votre mot de passe";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($password_err) && ($password != $confirm_password)) {
      $confirm_password_err = "les mots de passe ne sont pas les memes";
    }
  }
    if (empty($password_err) && empty($username_err) && empty($confirm_password_err)) {
      $sql = "INSERT INTO users(username, password) VALUES (?,?)";

      if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        //nouveau $hash
        if (mysqli_stmt_execute($stmt)) {

            header("location: login.ctrl.php");

        } else {
          echo "erreur, recommencez";
        }
      }
        mysqli_stmt_close($stmt);

    }
mysqli_close($link);
}

include('../../view/autres/inscription.view.php');
 ?>
