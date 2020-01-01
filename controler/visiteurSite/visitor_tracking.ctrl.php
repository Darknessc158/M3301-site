<?php


require_once('visiteurComptage.ctrl.php');//the file with connection code and functions
//get the required data
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$visitor_browser = getBrowser();
$visitor_hour = date("h");
$visitor_minute = date("i");
$visitor_date = date('Y-m-d H:i:s');
$visitor_day = date("d");
$visitor_month = date("m");
$visitor_year = date("Y");
$visitor_refferer =  $_SERVER['HTTP_REFERER'];
$visited_page = selfURL();

//write the required data to database
mysqli_select_db( $visitors,$database_visitors);
$sql = "INSERT INTO visitors_table (visitor_ip, visitor_browser, visitor_hour,
 visitor_minute, visitor_date, visitor_day, visitor_month, visitor_year,
 visitor_refferer, visitor_page) VALUES ('$visitor_ip', '$visitor_browser',
 '$visitor_hour', '$visitor_minute', '$visitor_date', '$visitor_day', '$visitor_month',
 '$visitor_year', '$visitor_refferer', '$visited_page')";
$result = mysqli_query($visitors,$sql) or trigger_error(mysqli_error($visitors),E_USER_ERROR);

 ?>
