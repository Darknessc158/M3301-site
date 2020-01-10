<?php

// Envoi du message sur la boite mail

    $email = $_POST['email'];
    $nom = $_POST['nom'];

    $sujet=$_POST['sujet'];
    $mailDestinataire="aurelien.bernabe@hotmail.fr";

	$from = "From: ".$nom."<".$email."> \nMime-Version:\n";
	$from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
	$header= $sujet;

	$messageMail = "
            $sujet:

            Nom :   ".$nom."
            Email :   ".$email."

            ----------- Commentaires -----------
            ".Stripslashes($_POST['message'])."
            ---------------------------------------";

	mail($mailDestinataire, $sujet, $messageMail, $from);

?>
