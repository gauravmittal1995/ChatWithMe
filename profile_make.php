<?php
include("headerfooter.php");
include("varfromtable.php");
?>
<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">General Settings</a></li>
		<li><a href="#tab2" data-toggle="tab">Privacy</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab1">
			<!--Enter Code for tab1-->
			<div class="container">
				<h3 class="text-center">General Account Settings</h3>
				<fieldset>				
				<table class="table table-bordered">
					<tr>
						<td><label class="text-center">Username:</label></td>
						<td><?php echo("$name");?></td>
					</tr>
					<tr>
						<td><label class="text-center">Handle:</label></td>
						<td><?php echo("$handle");?></td>
					</tr>
					<tr>
						<td><label class="text-center">Email:</label></td>
						<td><?php echo("$email");?></td>
					</tr>
					<tr>
						<td><label class="text-center">Date of Birth:</label></td>
						<td><?php echo("$dob");?></td>
					</tr>
				</table>
				</fieldset>
			</div>
		</div>
		<div class="tab-pane" id="tab2">
			<!--Enter Code for tab2 -->
		</div>
	</div>
</div>
