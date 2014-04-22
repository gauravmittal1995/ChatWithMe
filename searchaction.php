<?php
include("headerfooter.php");
include("config.php");

$pattern=$_POST['search'];

$tablename="registered_members";

$sql1="SELECT * FROM $tablename WHERE `name` LIKE '%$pattern%'";
$result1=mysqli_query($conn,$sql1);
echo("<div class='container'>");
if($result1){

$count=mysqli_num_rows($result1);

for ($x=0; $x<$count; $x++) {
$rows=mysqli_fetch_array($result1);
$name=$rows['name'];
$email=$rows['email'];
$handle=$rows['handle'];
echo "<h3 class='text-center' style='color:blue'><strong>$name</strong></h3><h4 class='pull-left'>$handle</h4><h4 class='pull-right'>$email</h4><br><hr>";
}

}

else{
echo("NOPES");
}
echo("</div>");
?>
