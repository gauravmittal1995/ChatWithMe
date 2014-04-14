<?php
include("headerfooter.php");
include("varfromtable.php");
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>

function changetoform()
{
	var idspace=document.getElementById("generalsetting");
	idspace.innerHTML="";
	idspace.innerHTML='<h3 class="text-center">General Account Settings</h3><form name="form1" method="post" action="makechange.php"><fieldset><table class="table table-bordered"><tr><td><label class="text-center">Username:</label></td><td><label class="text-center"><input name="username" type="text" value="<?php echo("$name");?>"></label></td></tr><tr><td><label class="text-center">Handle:</label></td><td><label class="text-center"><input name="handle" type="text" value="<?php echo("$handle");?>"></label></td></tr><tr><td><label class="text-center">Email:</label></td><td><label class="text-center"><input name="email" type="text" value="<?php echo("$email");?>"></label></td></tr><tr><td><label class="text-center">Date of Birth (mm/dd/yyyy):</label></td><td><label class="text-center"><input name="dob" id="dob" type="text" value="<?php echo("$dob");?>"></label></td></tr><tr><td><label class="text-center"><input type="submit" class="btn" value="Save Changes"></label></td><td><label class="text-center"><button type="button" class="btn" onclick="changetoform()">Reset</button></label></td></tr></table></fieldset></form>';
}

function clicker()
{
	var btn=document.getElementById("flip");
	var blk=document.getElementById("panel");
	btn.style.display='none';
	blk.style.display='block';
}

</script>

<div class="container">
<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">General Settings</a></li>
		<li><a href="#tab2" data-toggle="tab">Profile Information</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab1">
			<!--Enter Code for tab1-->
			<div class="container" id="generalsetting">
				<h3 class="text-center">General Account Settings</h3>
				<fieldset>
				<?php
					//Displays Error messages if any.
					if(isset($_GET['msg1'])){
						$msg1=$_GET['msg1'];
						echo("<label class='text-center'><h4 style='color:red'>$msg1</h4></label>");
					}
				?>				
				<table class="table table-bordered">
					<tr>
						<td><label class="text-center">Username:</label></td>
						<td><label class="text-center"><?php echo("$name");?></label></td>
					</tr>
					<tr>
						<td><label class="text-center">Handle:</label></td>
						<td><label class="text-center"><?php echo("$handle");?></label></td>
					</tr>
					<tr>
						<td><label class="text-center">Email:</label></td>
						<td><label class="text-center"><?php echo("$email");?></label></td>
					</tr>
					<tr>
						<td><label class="text-center">Date of Birth (mm/dd/yyyy):</label></td>
						<td><label class="text-center"><?php echo("$dob");?></label></td>
					</tr>
				</table>
				</fieldset>
				<button type="button" class="btn" onclick="changetoform()">Edit Information</button><br><br>
			</div>
				<button type="button" id="flip" class="btn" onclick="clicker()">Change Password</button>
			
			<div id="panel" class="container" style="display:none">				
				<form name="form2" method="post" action="passchange.php">
					<fieldset>
						<table class="table table-bordered">
							<tr>
								<td><label class="text-center">Enter Current Password:</label></td>
								<td><label class="text-center"><input name="currpass" type="password"></label></td>
							</tr>
							<tr>
								<td><label class="text-center">Enter New Password:</label></td>
								<td><label class="text-center"><input name="newpass" type="password"></label></td>
							</tr>
							<tr>
								<td><label class="text-center">Confirm New Password:</label></td>
								<td><label class="text-center"><input name="confpass" type="password"></label></td>
							</tr>
							<tr>
								<td><label class="text-center"><input type="submit" class="btn" value="Change Password"></label></td>
								<td><label class="text-center"><button type="reset" class="btn">Reset</button></label></td>
							</tr>
						</table>
					</fieldset>
				</form>		
			</div>
		</div>
		<div class="tab-pane" id="tab2">
			<!--Enter Code for tab2-->
			<div class="container" id="profilesetting">			
				<h3 class="text-center"><?php echo("Profile Setting For ".ucfirst($handle)."");?></h3>							
			</div>
		</div>
	</div>
</div>
</div>
