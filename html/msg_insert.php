<?php

/*
   Code to store messages in a database.
   Messages are stored in a single database with fields Sender, Reciever, Message and Date/Time
   The way that messages are passed to the script is left with Default values to be changed later.

 */

#include "classes/message.php";

$Sender= "Nair"  ;
$Reciever= "Tulsyan";
$Message=  "Bakwas";

$host="localhost";
$username="root";
$password="toor"; 
$db_name="ChatWithMe"; 

$conn = mysqli_connect("$host", "$username", "$password","$db_name");
if(! $conn)
	{
		echo "Not Connected\n";
	}
$insert="INSERT INTO Messages(Sender,Reciever,Message,Send_Date,Send_Time) 
VALUES ('$Sender','$Reciever','$Message',CURDATE(),CURTIME() );";

$test=mysqli_query($conn,$insert);
if(! $test)
	echo "Not Done\n"

?>
