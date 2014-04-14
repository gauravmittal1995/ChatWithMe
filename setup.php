<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username
$password="toor"; // Mysql password
$db_name="ChatWithMe"; // Database name 1

//Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password",$db_name);

//If connection fails.
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}

$tbl_name1="temp_members_db"; //tablename 1.
$tbl_name2="registered_members"; //tablename 2.

//Creating table "temp_members_db".
$sql1="CREATE TABLE `$tbl_name1` ( `confirm_code` varchar(65) NOT NULL default '', `name` varchar(65) NOT NULL default '', `email` varchar(65) NOT NULL default '', `password` varchar(20) NOT NULL default '', `handle` varchar(65) NOT NULL default '', `dob` varchar(15) NOT NULL default '' ) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
$result1=mysqli_query($conn,$sql1);

//If succesfully created.
if($result1){
echo "Table $tbl_name1 succesfully created. \r\n";
}
//If problem while creating.
else{
echo "Table $tbl_name1 couldnt be created. Check the hostname,username,password,database_name. Maybe another table of the same name already exists \r\n";
}

//Creating table "registered_members".
$sql2="CREATE TABLE `$tbl_name2` ( `id` int(4) NOT NULL auto_increment, `name` varchar(65) NOT NULL default '', `email` varchar(65) NOT NULL default '', `password` varchar(65) NOT NULL default '', `handle` varchar(65) NOT NULL default '', `dob` varchar(15) NOT NULL default '', PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
$result2=mysqli_query($conn,$sql2);

//If succesfully created.
if($result2){
echo "Table $tbl_name2 succesfully created. \r\n";
}
//If problem while creating.
else{
echo "Table $tbl_name2 couldnt be created. Check the hostname,username,password,database_name. Maybe another table of the same name already exists \r\n";
}

if(($result1)&&($result2)){
echo "Tables created. \r\n";
}
else
{
echo "Error in creating tables. \r\n";
}
?>
