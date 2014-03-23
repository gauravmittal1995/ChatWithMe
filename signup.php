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

<div class="container">
	<form>
		<fieldset>
			<legend class="text-center">Login</legend>
			<table class="table table-bordered table-condensed">
			<tr>
			<td>			
			<label class="text-center">Username</label>
			</td>
			<td>
			<label class="text-center">
			<input type="text" placeholder=""></label>
			</td>
			</tr>
			<tr>
			<td>			
			<label class="text-center">Password</label>
			</td>
			<td>
			<label class="text-center">			
			<input type="password" placeholder=""></label>
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
			<input type="text" name="name" id="name" placeholder=""></label>
			</td>
			</tr>
			<tr>
			<td>			
			<label class="text-center">Password</label>
			</td>
			<td>
			<label class="text-center">			
			<input type="password" name="password" id="password" placeholder=""></label>
			</td>
			</tr>
			<tr>
			<td>
			<label class="text-center">Email</label>
			</td>
			<td>
			<label class="text-center">			
			<input type="text" name="email" id="email" placeholder=""></label>
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
