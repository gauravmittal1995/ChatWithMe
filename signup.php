<?php
include("headerfooter.html")
?>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/alert.js"></script>
<script src="js/modal.js"></script>
<script src="js/scrollspy.js"></script>
<script src="js/tab.js"></script>
<script src="js/tooltip.js"></script>
<script src="js/popover.js"></script>		
<script src="js/button.js"></script>
<script src="js/carousel.js"></script>
<script src="js/typeahead.js"></script>
<script src="js/collapse.js"></script>
<script src="js/transition.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery.ui.core.js"></script>
<script src="js/jquery.ui.datepicker.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<link rel="stylesheet" href="css/jquery.ui.all.css">
<script>
	$(function() {
		$( "#dob" ).datepicker();
		$( "#dob" ).datepicker( "mm/dd/yy", "dateFormat", $( this ).val() );
	});
</script>

<div class="container">
	<form name="form" method="post" action="login.php">
		<fieldset>
			<legend class="text-center">Login</legend>
			<table class="table table-bordered table-condensed">
			<tr>
			<td>			
			<label class="text-center">Username</label>
			</td>
			<td>
			<label class="text-center">
			<input name="username" id="username" type="text" placeholder="" required></label>
			</td>
			</tr>
			<tr>
			<td>			
			<label class="text-center">Password</label>
			</td>
			<td>
			<label class="text-center">			
			<input name="pass" id="pass" type="password" placeholder="" required></label>
			</td>
			</tr>
			<tr>
			<td>
			<label class="text-center">						
			<input type="reset" name="Reset" value="Reset" class="btn text-center">
			</label>
			</td>
			<td>
			<label class="text-center">						
			<input type="submit" name="Submit" value="Submit" class="btn text-center">
			</label>
			</td>
			</tr>				
			</table>
		</fieldset>
	</form>

</div>
<hr>

<div class="container">
	<form name="form1" method="post" action="signup_ac.php">
		<fieldset>
			<legend class="text-center">Register</legend>
			<table class="table table-bordered table-condensed">
			<tr>
			<td>			
			<label class="text-center">Username</label>
			</td>
			<td>
			<label class="text-center">
			<input type="text" name="name" id="name" placeholder="" required></label>
			</td>
			</tr>
			<tr>
			<td>			
			<label class="text-center">Password</label>
			</td>
			<td>
			<label class="text-center">			
			<input type="password" name="password" id="password" placeholder="" required></label>
			</td>
			</tr>
			<tr>
			<td>
			<label class="text-center">Email</label>
			</td>
			<td>
			<label class="text-center">			
			<input type="text" name="email" id="email" placeholder="" required></label>
			</td>
			</tr>
			<tr>
			<td>
			<label class="text-center">Handle name</label>
			</td>
			<td>
			<label class="text-center">			
			<input type="text" name="handle" id="handle" placeholder="" required></label>
			</td>
			</tr>
			<tr>
			<td>
			<label class="text-center">Date Of Birth</label>
			</td>
			<td>
			<label class="text-center">			
			<input type="text" name="dob" id="dob" placeholder="" required></label>
			</td>
			</tr>
			<tr>
			<td>
			<label class="text-center">						
			<input type="reset" name="Reset" value="Reset" class="btn text-center">
			</label>
			</td>
			<td>
			<label class="text-center">						
			<input type="submit" name="Submit" value="Submit" class="btn text-center">
			</label>
			</td>
			</tr>			
			</table>
		</fieldset>
	</form>

</div>
