<?php
include("config.php");
session_start();
//table name.
$tbl_name=registered_members;

//values sent from form.
$name=$_POST['username'];
$pass=$_POST['pass'];

//Retrieve data from table.
$sql1="SELECT * FROM $tbl_name WHERE name ='$name'";
$result1=mysqli_query($conn,$sql1);

//if result is successful.
if($result1){

// Count how many row has this username.
$count=mysqli_num_rows($result1);

// if count is 1. i.e Unique username.
if($count==1){

$rows=mysqli_fetch_array($result1);
$name1=$rows['name'];
$password=$rows['password'];
$handle=$rows['handle'];

//If password is correct.
if($password==$pass){
//Redirect to new page after storing the handle in the session.
$_SESSION['handle']=$handle;
header("Location: profile.php");
}
//If password is incorrect.
else{
header("Location: signup.php?msg1=Username or Password Invalid");
}
}
// if count is 0. i.e Data doesnt exist in Table.
else {
header("Location: signup.php?msg1=Username or Password Invalid");
}
}
?>
