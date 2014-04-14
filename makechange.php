<?php
include('config.php');

session_start();

$tbl_name="registered_members";

//Store the Post variables in temporary variables.
$handle=$_POST['handle'];
$email=$_POST['email'];
$name=$_POST['username'];
$dob=$_POST['dob'];

//Store session variable in a variable and renew the session variable.
$prevhandle=$_SESSION['handle'];
$_SESSION['handle']=$handle;

//Update table
$sql="UPDATE $tbl_name 
SET name='$name', email='$email', handle='$handle', dob='$dob'
WHERE handle='$prevhandle';";
$result=mysqli_query($conn,$sql);

//If sql works and its updated.
if($result){
//Redirect to profile_make.php page.
header("Location: profile_make.php?msg1=Information Updated");
}
//if it doesnt work.
else{
header("Location: profile_make.php?msg1=Connection Error");
}
?>
