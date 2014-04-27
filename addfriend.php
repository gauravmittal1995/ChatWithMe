<?php
include("varfromtable.php");
include("config.php");
$friendname=$_GET['friendname'];
$sql1="INSERT INTO $name(objectname,objecttype)VALUES('$friendname','FRIENDSENT')";
$sql2="INSERT INTO $friendname(objectname,objecttype)VALUES('$name','FRIENDTOACCEPT')";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
if(($result1)&&($result2)){
header("LOCATION:profile.php");
}
else{
echo("Sorry Some Error occured in db extraction. Make sure your logged in.");
}
?>
