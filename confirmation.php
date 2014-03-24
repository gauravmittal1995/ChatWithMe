<?php
include('config.php');

// Passkey that got from link 
$passkey=$_GET['passkey'];
$tbl_name1="temp_members_db";

// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code ='$passkey'";
$result1=mysqli_query($conn,$sql1);

// If successfully queried 
if($result1){

// Count how many row has this passkey
$count=mysqli_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

$rows=mysqli_fetch_array($result1);
$name=$rows['name'];
$email=$rows['email'];
$password=$rows['password'];
$handle=$rows['handle'];
$dob=$rows['dob'];
$tbl_name2="registered_members";

// Insert data that retrieves from "temp_members_db" into table "registered_members" 
$sql2="INSERT INTO $tbl_name2(name, email, password,handle,dob)VALUES('$name', '$email', '$password', '$handle', '$dob')";
$result2=mysqli_query($conn,$sql2);

}

// if not found passkey, display message "Wrong Confirmation code" 
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
if($result2){

echo "Your account has been activated";

// Delete information of this user from table "temp_members_db" that has this passkey 
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysqli_query($conn,$sql3);

$sql4="CREATE TABLE `$name` ( `id` int(4) NOT NULL auto_increment, `objectname` varchar(65) NOT NULL default '', `objecttype` varchar(65) NOT NULL default '', PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";

$result4=mysqli_query($conn,$sql4);

}

}
?>
