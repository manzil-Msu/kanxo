<?php
// define funcation use to declare the constant variable, A constant's value cannot be changed after it is set and does not requered Dollar sing($)

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'libiary');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);  //mysqli_connect() function opens a new connection to the MySQL server.


//PHP mysqli_connect_errno() function returns an integer value representing the code of the error from the last connection call, incase of a failure.

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
 
 
}
?>