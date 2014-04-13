<?php

#  Code to fetch the the last message sent between a Sender and a Reciever
#  Result is echoed for AJAX Response.

$sender='Nair';
$reciever="Tulsyan";

$host="localhost";
$username="root";
$password="toor";
$db_name="ChatWithMe";

$conn = mysqli_connect("$host", "$username", "$password","$db_name");
if(! $conn)
{	echo "Not Connected\n";}

$fetch="SELECT * FROM Messages WHERE Sender='$sender' AND Reciever='$reciever' ORDER BY id DESC LIMIT 1";
$res=mysqli_query($conn,$fetch);
if(! $res)
{	echo "Not Done";}

$row=mysqli_fetch_assoc($res);
echo $row['Message'];

?>
