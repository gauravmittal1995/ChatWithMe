<?php
include("varfromtable.php");
include("config.php");
$friendname=$_GET['friendname'];
$sql1="UPDATE $name 
SET objecttype='FRIEND'
WHERE objectname='$friendname';";
$sql2="UPDATE $friendname 
SET objecttype='FRIEND'
WHERE objectname='$name';";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
if(($result1)&&($result2)){
header("LOCATION:profile.php");
}
else{
echo("Sorry Some Error occured in db extraction. Make sure your logged in.");
}
?>
