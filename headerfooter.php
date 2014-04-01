<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
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
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-top">
			<div class="navbar-inner" id="header">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<!-- Be sure to leave the brand out there if you want it shown -->
					<a class="brand" href="index.php"><strong>ChatWithMe</strong></a>

					<!-- Everything you want hidden at 940px or less, place within here -->
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li>
								<a href="profile.php">Profile</a>
							</li>
							<li class="dropdown">
                						<a href="#" class="dropdown-toggle"  data-toggle="dropdown">ChatRooms<b class="caret"></b></a>
                						<ul class="dropdown-menu" role="menu">
                  							<li><a href="#">Personal Rooms(private)</a></li>
                  							<li><a href="#">Conference Rooms(private)</a></li>
                 							<li><a href="#"></a></li>
								<!--	<li class="divider"></li>-->
									<li><a href="#">Personal Rooms(public)</a></li>
									<li><a href="#">Conference Rooms(public)</a></li>
                						</ul>
              						</li>
							<li>
								<a href="#">Friends</a>
							</li>
						</ul>
								<form class="navbar-search pull-left">   										<input type="text" class="search-query" placeholder="Search people"> 
    								</form>
						<ul class="nav pull-right">
							<?php
							session_start();
							if(isset($_SESSION['handle'])){
							echo "<li>
								<a href='profile_make.php'><i class='icon-home icon-white'></i> " . $_SESSION['handle'] . "</a>
							</li>

							<li>
								<a href='logout.php'><i class='icon-user icon-white'></i> Logout</a>
							</li>	
								";							
							}
							else{
							echo "
							<li>
								<a href='signup.php'><i class='icon-user icon-white'></i> Login</a>
							</li>
							";	
							}
							?>					
						</ul>
					<!-- .nav, .navbar-search, .navbar-form, etc -->
					</div>

				</div>
			</div>
		</div>
		<style>
		html,body{background-color:#FFFFFF; height:100%;}
		 @media (max-width: 767px) {
 		       #header {
        			  margin-left: -20px;
        			  margin-right: -20px;
        			  padding-left: 20px;
       				  padding-right: 20px;
        }
      }
	</style>
<!--	<div class="container" style="position:relative; min-height: 100%; height: auto !important; height: 100%; margin: 0 auto -60px;" id="wrap">
	</div>
	<div id="push" style="height: 60px;"></div>
	<div id="footer" style="height: 60px;  background-color: #F0F0F0;">
    		<div class="container">
        		<p class="muted credit text-center">
            			This WebApplication was developed by:
            				<a href="#"> Gaurav Mittal</a>,
            				<a href="#"> Aaditya M. Nair</a>,
            				<a href="#"> Krishna Tulsyan</a> and
            				<a href="#"> Indraneil Paul</a>
        		</p>
    		</div>
	</div>
-->
	</body>
</html>
