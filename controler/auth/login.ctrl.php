<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    if($_SESSION["admin"]){
      header("location: profilAdmin.ctrl.php");
    }else{
        header("location: profil.ctrl.php");

    }

    exit;
}


require_once "configAuth.ctrl.php";


$username = $password = "";
$username_err = $password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(trim($_POST["username"]))){
        $username_err = "Veuillez entrer votre identifiant";
    } else{
        $username = trim($_POST["username"]);
    }


    if(empty(trim($_POST["password"]))){
        $password_err = "Veuillez entrer votre mot de passe";
    } else{
        $password = trim($_POST["password"]);
    }


    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT id, username, password , admin FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);


            $param_username = $username;


            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);

              //verification du mot de passe si l'identifiant existe
                if(mysqli_stmt_num_rows($stmt) == 1){

                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $admin);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // mot de passe correct
                            session_start();

                            // stockage dans la variable session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["admin"] = $admin;

                            // Redirect user to welcome page
                            if($_SESSION["admin"] === 1){
                              header("location: profilAdmin.ctrl.php");
                            }else{
                              header("location: profil.ctrl.php");
                            }
                        } else{
                            // message d'erreur si le mot de passe est incorrect
                            $password_err = "Le mot de passe est incorrect";
                        }
                    }
                } else{
                    // message d'erreur si l'identifiant n'existe pas
                    $username_err = "L'identifiant est incorrect";
                }
            } else{
                echo "Erreur, veuillez reessayer";
            }
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
}
include('../../view/autres/login.view.php');
?>
