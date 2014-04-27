<?php
include("headerfooter.php");
include("config.php");
if(isset($_SESSION['handle']))
	include("varfromtable.php");
$friendname=$_GET['friend'];

//SQL queries to extract info about the profile from the user's database.
$sql1="SELECT * FROM $friendname WHERE objecttype ='FIRSTNAME'";
$sql2="SELECT * FROM $friendname WHERE objecttype ='LASTNAME'";
$sql3="SELECT * FROM $friendname WHERE objecttype ='SEX'";
$sql4="SELECT * FROM $friendname WHERE objecttype ='COUNTRY'";
$sql5="SELECT * FROM $friendname WHERE objecttype ='CITY'";
$sql6="SELECT * FROM $friendname WHERE objecttype ='PHONENUM'";

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

$sql7="SELECT * FROM registered_members WHERE name ='$friendname'";
$result7=mysqli_query($conn,$sql7);

//if Success:
if($result7){

//Store the row in an array and use this to store all the respective fields in different variables.
$rows=mysqli_fetch_array($result7);
$name1=$rows['name'];
$email1=$rows['email'];
$handle1=$rows['handle'];
$dob1=$rows['dob'];

}
//if failure:
else{

echo "Could not retrieve. Maybe not logged in or SQL problem11.";

}

?>
<div class="container">
	<h3 class='text-center'>Profile for <?php echo("$friendname");?></h3>
	<table class="table table-bordered">
		<tr>
			<td><label class="text-center">Full Name:</label></td>
			<td><label class="text-center"><?php echo("$firstname $lastname");?></label></td>
		</tr>		
		<tr>
			<td><label class="text-center">Username:</label></td>
			<td><label class="text-center"><?php echo("$name1");?></label></td>
		</tr>
		<tr>
			<td><label class="text-center">Handle:</label></td>
			<td><label class="text-center"><?php echo("$handle1");?></label></td>
		</tr>
		<tr>
			<td><label class="text-center">Email:</label></td>
			<td><label class="text-center"><?php echo("$email1");?></label></td>
		</tr>
		<tr>
			<td><label class="text-center">Date of Birth (mm/dd/yyyy):</label></td>
			<td><label class="text-center"><?php echo("$dob1");?></label></td>
		</tr>
		<tr>
			<td><label class="text-center">Sex:</label></td>
			<td><label class="text-center"><?php echo("$sex");?></label></td>
		</tr>
		<tr>
			<td><label class="text-center">Country:</label></td>
			<td><label class="text-center"><?php echo("$country");?></label></td>
		</tr>
		<tr>
			<td><label class="text-center">City:</label></td>
			<td><label class="text-center"><?php echo("$city");?></label></td>
		</tr>
		<tr>
			<td><label class="text-center">Contact Number:</label></td>
			<td><label class="text-center"><?php echo("$phonenum");?></label></td>
		</tr>
	</table>
<?php
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
?>
</div>
