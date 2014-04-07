<!--
	Code to store messages in a database.

-->



<?php
#include "classes/message.php";

$host="localhost";
$username="root";
$password="toor"; 
$db_name="ChatWithMe"; 

$conn = mysqli_connect("$host", "$username", "$password",$db_name);

$setup_table="create table Messages(`Sender` Char(40), `Reciever` Char(40, `Message` Char(200), `Send_Date` DATE, `Send_Time` TIME)";
$test=mysqli_query($conn,$setup_table);
if ($test)
	echo "No Problem";


?>
