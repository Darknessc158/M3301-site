<?php
$userpassword = $_POST['password'];
$hash= password_hash($userpassword, PASSWORD_DEFAULT);
var_dump($hashed_password);


?>
