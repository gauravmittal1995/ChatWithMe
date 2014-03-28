<?php
include("headerfooter.php");

//Get the handle name which was sent.
$handle=$_GET['handle'];

if($handle==""){
echo("Welcome to ChatWithMe, Please <a href='signup.php'>Login</a> to continue.");
}

else{
echo("Welcome to ChatWithMe, $handle.");
}

?>

