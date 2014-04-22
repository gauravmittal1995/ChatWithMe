<?php
include("headerfooter.php");
include("config.php");

$pattern=$_POST['search'];
if($pattern != ''){
$tablename="registered_members";

$sql1="SELECT * FROM $tablename WHERE `name` LIKE '%$pattern%'";
$result1=mysqli_query($conn,$sql1);
echo("<div class='container'>");
if($result1){

$count=mysqli_num_rows($result1);
if($count>0){
echo("<h3 class='text-center'>Your search, '$pattern' , matched $count records:</h3>");
echo("<hr style='height:2px;background-color:#d0d0d0;'>");
for ($x=0; $x<$count; $x++) {
$rows=mysqli_fetch_array($result1);
$name=$rows['name'];
$email=$rows['email'];
$handle=$rows['handle'];
echo "<h3 class='text-left' style='color:blue'><strong>$name</strong></h3><h4>$handle</h4><h4>$email</h4><hr style='height:2px;background-color:#d0d0d0;'>";
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
