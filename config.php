<?php
//echo("HELLOstart");
$host="localhost"; // Host name 
$username="gaurav"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 1

//echo("Hellomid");
//phpinfo();
//Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password","$db_name");
//echo("Hello1234");
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
//echo("HELLO");
?>
