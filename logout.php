<?php
include("config.php");
include("varfromtable.php");
//starting the session.
session_start();
//Becoming offline
$sql1="UPDATE $name 
SET objectname='offline'
WHERE objecttype='CHATSTATUS';";
//Destroying all session variables.
session_destroy();
//Redirecting to login page again.
header("Location: signup.php");
?>
