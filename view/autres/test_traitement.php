<?php  foreach ( $_POST as $post => $val )  {
        $$post = $val;
        echo $val;
          echo $$post;
    }
 ?>
