<?php
include("headerfooter.php");
session_start();

//check whether session handle was set(i.e is already logged in.
if(isset($_SESSION['handle'])){
include("varfromtable.php");
include("profilefromtable.php");
echo("<div class='container'>");
echo("<h3 class='text-center'>Welcome to ChatWithMe, ". ucfirst($firstname)." ".ucfirst($lastname)."</h3><br>");
echo("FIRSTNAME: $firstname<br>LASTNAME: $lastname<br>SEX: $sex<br>COUNTRY: $country<br>CITY: $city<br>CONTACT NUMBER: $phonenum<br>USERNAME: $name<br>EMAIL: $email<br>HANDLE: $handle<br>BATE OF BIRTH(MM/DD/YYYY): $dob");
echo("</div>");
}
//If not logged in.
else{
echo("Welcome to ChatWithMe, Please <a href='signup.php'>Login</a> to continue.");
}

?>

