<?php
/*
  Code to get all messages between two users 
 */

$sender=$_GET['sender'];
$reciever=$_GET['reciever'];
#$sender='Nair'; $reciever='Nair';

$host="localhost";
$username="root";
$password="kk";
$db_name="ChatWithMe";

$conn = mysqli_connect("$host", "$username", "$password","$db_name");
if(! $conn)
{	echo "Not Connected\n";}

$fetch="SELECT id,Sender,Reciever,Message FROM Messages WHERE Sender='$sender' AND Reciever='$reciever' OR Sender='$reciever' AND Reciever='$sender'";
$res=mysqli_query($conn,$fetch);
if(! $res)
{	echo "Not Done";}

$row=mysqli_fetch_all($res,MYSQLI_ASSOC);
#print_r($row)
?>
