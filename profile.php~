<?php
include("headerfooter.php");
session_start();

//check whether session handle was set(i.e is already logged in.
if(isset($_SESSION['handle'])){
echo("Welcome to ChatWithMe,<strong> ". $_SESSION['handle']."</strong>.");
}
//If not logged in.
else{
echo("Welcome to ChatWithMe, Please <a href='signup.php'>Login</a> to continue.");
}

?>

