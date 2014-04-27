<?php
include("headerfooter.php");
include("config.php");
if(isset($_SESSION['handle']))
	include("varfromtable.php");
$pattern=$_POST['search'];
if($pattern != ''){
$tablename="registered_members";

$sql1="SELECT * FROM $tablename WHERE `name` LIKE '$pattern%'";
$result1=mysqli_query($conn,$sql1);
echo("<div class='container'>");
if($result1){

$count=mysqli_num_rows($result1);
if($count>0){
echo("<h3 class='text-center'>Your search, '$pattern' , matched $count records:</h3>");
echo("<hr style='height:2px;background-color:#d0d0d0;'>");
for ($x=0; $x<$count; $x++) {
$rows=mysqli_fetch_array($result1);
$name1=$rows['name'];
$sql2="SELECT * FROM $name1 WHERE objecttype='FIRSTNAME'";
$sql3="SELECT * FROM $name1 WHERE objecttype='LASTNAME'";
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$handle1=$rows['handle'];
$rows2=mysqli_fetch_array($result2);
$rows3=mysqli_fetch_array($result3);
$firstname1=$rows2['objectname'];
$lastname1=$rows3['objectname'];
echo "UserName: <strong><a href='friendprofile.php?friend=$name1' class='text-left' style='font-size:1.5em;color:blue'>$name1</a></strong><br>Handle: <strong>$handle1</strong><br>FullName: <strong>$firstname1 $lastname1</strong><br>";
//Action Starts
if(isset($_SESSION['handle'])){
if($_SESSION['handle']==$handle1);
else{
$sql4="SELECT * FROM $name WHERE objectname='$name1'";
$result4=mysqli_query($conn,$sql4);
$count1=mysqli_num_rows($result4);
if($count1==0){
echo "<form action='addfriend.php?friendname=$name1'><button class='btn' value='Send Friend Request' type='submit'></button></form>";
}
else{
$rows4=mysqli_fetch_array($result4);
$condition=$rows4['objecttype'];
if($condition=='FRIEND'){
echo("<i style='color:grey'>Friend</i>");
}
else if($condition=='FRIENDSENT'){
echo("<i style='color:grey'>Friend Request Sent</i>");
}
else if($condition='FRIENDTOACCEPT'){
echo("<table class='table'><tr><td><label class='text-center'><form action='acceptfriend.php?friendname=$name1'><button class='btn' value='Accept Friend Request' type='submit'></button></form></label></td><td><label class='text-center'><form action='declinefriend.php?friendname=$name1'><button class='btn' value='Decline Friend Request' type='submit'></button></form></label></td></tr></table>");
}
}
}
}
//Action Ends
echo "<hr style='height:2px;background-color:#d0d0d0;'>";
}
}
else{
echo("<h4 class='text-center'>Sorry, but your search returns no matches</h4>");
}
}

else{
echo("NOPES");
}
echo("</div>");
}
else
{
	echo("<div class='container'><h4 class='text-center'>Sorry, But you havent searched for anything</h4></div>");
}
?>
