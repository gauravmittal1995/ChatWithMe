<?php
include("config.php");

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
//Redirect to new page sending the handle with it.
header("Location: profile.php?handle=$handle");
}
//If password is incorrect.
else{
echo("Password incorrect");
}
}
// if count is 0. i.e Data doesnt exist in Table.
else {
echo ("Username entered is incorrect");
}
}
?>
