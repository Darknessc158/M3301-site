<?php

foreach ($_POST as $post => $val) {
  $$post = $val;
  echo $val;
}

var_dump($_POST);


 ?>
