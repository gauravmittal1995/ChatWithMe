<?php
include("config.php");
include("varfromtable.php");

//SQL queries to extract info about the profile from the user's database.
$sql1="SELECT * FROM $name WHERE objecttype ='FIRSTNAME'";
$sql2="SELECT * FROM $name WHERE objecttype ='LASTNAME'";
$sql3="SELECT * FROM $name WHERE objecttype ='SEX'";
$sql4="SELECT * FROM $name WHERE objecttype ='COUNTRY'";
$sql5="SELECT * FROM $name WHERE objecttype ='CITY'";
$sql6="SELECT * FROM $name WHERE objecttype ='PHONENUM'";

//SQL results.
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);
$result6=mysqli_query($conn,$sql6);

//If results are correct i.e SQL queries were succesfully executed. ALL OF THEM.
if(($result1)&&($result2)&&($result3)&&($result4)&&($result5)&&($result6)){
//Store the resulting table in array and store it in a temp var one by one.
$rows=mysqli_fetch_array($result1);
$firstname=$rows['objectname'];
$rows=mysqli_fetch_array($result2);
$lastname=$rows['objectname'];
$rows=mysqli_fetch_array($result3);
$sex=$rows['objectname'];
$rows=mysqli_fetch_array($result4);
$country=$rows['objectname'];
$rows=mysqli_fetch_array($result5);
$city=$rows['objectname'];
$rows=mysqli_fetch_array($result6);
$phonenum=$rows['objectname'];

}
//If the queries werent executed properly.
else{
//Display an error message.
echo("Error in connecting to database. Check to see whether your logged in.");

}
?>
