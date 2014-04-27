<?php
include("headerfooter.php");
include("config.php");
session_start();
if(!isset($_SESSION['handle'])){
header("LOCATION:profile.php");
}
?>
<?php
include("varfromtable.php");
?>
<div class="container">
<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">Friend List</a></li>
		<li><a href="#tab2" data-toggle="tab">Friend Request</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab1">
			<!--Enter Code for tab1-->
		<div class='container'>
		<?php
		$sql1="SELECT * FROM $name WHERE objecttype ='FRIEND'";
		$result1=mysqli_query($conn,$sql1);
		if($result1){

		$count=mysqli_num_rows($result1);
		if($count>0){
		echo("<h3 class='text-center'>Friend's List:</h3>");
		echo("<hr style='height:2px;background-color:#d0d0d0;'>");
		for ($x=0; $x<$count; $x++) {
		$rows=mysqli_fetch_array($result1);
		$namefriend=$rows['objectname'];
		echo("<a style='font-size:1.5em' href='friendprofile.php?friend=$namefriend'>$namefriend</a><hr style='height:2px;background-color:#d0d0d0;'>");
		}
		}
		else{
		echo("<h4 class='text-center'>Your Friend List is Empty.</h4>");
		}
		}
		else{
		echo("NOPES");
		}
		?>
		</div>	
		</div>
		<div class="tab-pane" id="tab2">
			<!--Enter Code for tab2-->
		<div class='container'>
		<?php
		$sql1="SELECT * FROM $name WHERE objecttype ='FRIENDTOACCEPT'";
		$result1=mysqli_query($conn,$sql1);
		if($result1){

		$count=mysqli_num_rows($result1);
		if($count>0){
		echo("<h3 class='text-center'>Friend's List:</h3>");
		echo("<hr style='height:2px;background-color:#d0d0d0;'>");
		for ($x=0; $x<$count; $x++) {
		$rows=mysqli_fetch_array($result1);
		$namefriend=$rows['objectname'];
		echo("<a style='font-size:1.5em' href='friendprofile.php?friend=$namefriend'>$namefriend</a><br>");
		echo("<table class='table'><tr><td><label class='text-center'><form action='acceptfriend.php?friendname=$namefriend'><button class='btn' type='submit'>Accept Friend Request</button></form></label></td><td><label class='text-center'><form action='declinefriend.php?friendname=$namefriend'><button class='btn' type='submit'>Decline Friend Request</button></form></label></td></tr></table>");
		echo("<hr style='height:2px;background-color:#d0d0d0;'>");
		}
		}
		else{
		echo("<h4 class='text-center'>No new Friend Request.</h4>");
		}
		}
		else{
		echo("NOPES");
		}
		?>
		</div>
		</div>
	</div>
</div>
</div>
