<?php
include('config.php');
include("varfromtable.php");
session_start();

$tbl_name="registered_members";

//Store the Post variables in temporary variables.
$handle1=$_POST['handle'];
$email1=$_POST['email'];
$name1=$_POST['username'];
$dob1=$_POST['dob'];

//Store session variable in a variable and renew the session variable.
$prevhandle=$_SESSION['handle'];
$_SESSION['handle']=$handle1;

//Update table
$sql="UPDATE $tbl_name 
SET name='$name1', email='$email1', handle='$handle1', dob='$dob1'
WHERE handle='$prevhandle';";
$result=mysqli_query($conn,$sql);
$sql1="ALTER TABLE $name
  RENAME TO $name1";
$result1=mysqli_query($conn,$sql1);
//If sql works and its updated.
if(($result)&&($result1)){
//Redirect to profile_make.php page.
header("Location: profile_make.php?msg1=Information Updated");
}
//if it doesnt work.
else{
header("Location: profile_make.php?msg1=Connection Error");
}
?>
