<?php
  define('DB_SERVER', 'soysauceduck99.ddns.net');
  define('DB_USERNAME','admincave');
  define('DB_PASSWORD','cave');
  define('DB_NAME', 'scale');

  $link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

  if ($link ===false) {
    die("erreur de connection".mysqli_connect_error());
  }



 ?>
