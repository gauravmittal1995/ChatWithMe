<?php
include('config.php');

//Need session variables.
session_start();

// table name 
$tbl_name="registered_members";

//Store session handle in a var handle to use it in sql query.
$handle=$_SESSION['handle'];

//SQL query to select information of the logged in user.
$sql1="SELECT * FROM $tbl_name WHERE handle ='$handle'";
$result1=mysqli_query($conn,$sql1);

//if Success:
if($result1){

//Store the row in an array and use this to store all the respective fields in different variables.
$rows=mysqli_fetch_array($result1);
$name=$rows['name'];
$email=$rows['email'];
$password=$rows['password'];
$handle=$rows['handle'];
$dob=$rows['dob'];

}
//if failure:
else{

echo "Could not retrieve. Maybe not logged in or SQL problem.";

}

?>
