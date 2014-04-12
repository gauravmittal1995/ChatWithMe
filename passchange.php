<?php

include("varfromtable.php");

//Store post var into temp vars.
$currpass = $_POST['currpass'];
$newpass = $_POST['newpass'];
$confpass = $_POST['confpass'];

//if currpass matches the current pass.
if($password==$currpass){

if($newpass==$confpass){

//Update the new password.
$tbl_name="registered_members";
$sql="UPDATE $tbl_name 
SET password='$newpass'
WHERE handle='$handle';";
$result=mysqli_query($conn,$sql);

if($result){
header("Location: profile_make.php?msg1=PASSWORD CHANGED");
}
//Error messages.
else{
header("Location: profile_make.php?msg1=SQL PROBLEM");
}
}
else{
header("Location: profile_make.php?msg1=NEW PASSWORDS DO NOT MATCH");
}
}
else{
header("Location: profile_make.php?msg1=INVALID CURRENT PASSWORD");
}

?>
