<?php

#  Code to fetch the the last message sent between a Sender and a Reciever

$sender='Nair';
$reciever="Tulsyan";

$host="localhost";
$username="root";
$password="toor";
$db_name="ChatWithMe";

$conn = mysqli_connect("$host", "$username", "$password","$db_name");
if(! $conn)
{
	echo "Not Connected\n";
}

$fetch="SELECT Message FROM Messages WHERE Sender='$sender' AND Reciever='$reciever' ORDER BY id DESC";
$test=mysqli_query($conn,$fetch);
if(! $test)
	echo "Not Done";



?>
