<?php

require 'src/Clockwork.php';
require 'src/ClockworkException.php';
$API_KEY=
$clockwork = new mediaburst\ClockworkSMS\Clockwork( $API_KEY ); //Be careful not to post your API Keys to public repositories.
$message = array( 'to' => '330614409064', 'message' => 'This is a test!' );
$result = $clockwork->send( $message );

 ?>
