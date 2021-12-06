<?php
// Create a connection to the logindb database.
// Set the encoding and the access details as constants:
DEFINE ('DB_USER', 'u265455877_ji');
DEFINE ('DB_PASSWORD', 'Asd,car21');
DEFINE ('DB_HOST', 'jiyongjie.com');
DEFINE ('DB_NAME', 'u265455877_ji');

// Make the connection:
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// mysql_connect

// Set the encoding...optional but recommended
mysqli_set_charset($dbcon, 'utf8');

if(!$dbcon->connect_error){
//    echo "Successfully connected...";
}
