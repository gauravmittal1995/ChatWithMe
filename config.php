<?php

$host="localhost"; // Host name 
$username="gaurav"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 1

//Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password","$db_name");

//If connection fails.
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}

?>
