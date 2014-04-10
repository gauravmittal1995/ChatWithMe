<?php
include("headerfooter.php");
include("varfromtable.php");
?>

<script>

function changetoform()
{
	var idspace=document.getElementById("generalsetting");
	idspace.innerHTML="";
	idspace.innerHTML='<h3 class="text-center">General Account Settings</h3><form name="form1" method="post" action="makechange.php"><fieldset><table class="table table-bordered"><tr><td><label class="text-center">Username:</label></td><td><label class="text-center"><input name="username" type="text" value="<?php echo("$name");?>"></label></td></tr><tr><td><label class="text-center">Handle:</label></td><td><label class="text-center"><input name="handle" type="text" value="<?php echo("$handle");?>"></label></td></tr><tr><td><label class="text-center">Email:</label></td><td><label class="text-center"><input name="email" type="text" value="<?php echo("$email");?>"></label></td></tr><tr><td><label class="text-center">Date of Birth (mm/dd/yyyy):</label></td><td><label class="text-center"><input name="dob" id="dob" type="text" value="<?php echo("$dob");?>"></label></td></tr></table></fieldset><input type="submit" class="btn" value="Save Changes"></form>';
}

</script>

<div class="container">
<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">General Settings</a></li>
		<li><a href="#tab2" data-toggle="tab">Privacy</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab1">
			<!--Enter Code for tab1-->
			<div class="container" id="generalsetting">
				<h3 class="text-center">General Account Settings</h3>
				<fieldset>				
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
				<button type="button" class="btn" onclick="changetoform()">Edit Information</button>
			</div>
		</div>
		<div class="tab-pane" id="tab2">
			<!--Enter Code for tab2-->
			<div class="container" id="privacysetting">			
				<button onclick="showchange()" class="btn">Change Password</button>
			</div>
		</div>
	</div>
</div>
</div>
