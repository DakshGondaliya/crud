<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'unrestful_api');
 
/* Attempt to connect to MySQL database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
mysqli_select_db($connection, 'unrestful_api');
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
// else {
//     echo "connected";
// }
?>