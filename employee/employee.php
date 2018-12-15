<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Employee Sandstonehousing</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<link rel="icon" type="image/png" href="http://sandstonehousing.com/images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
		<link rel="stylesheet" type="text/css" href="http://sandstonehousing.com/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="http://sandstonehousing.com/css/styles.css" />
		<link rel="stylesheet" type="text/css" href="http://sandstonehousing.com/css/lightbox.css" />
		<script src="http://sandstonehousing.com/js/lightbox/jquery-1.11.0.min.js"></script>
		<script src="http://sandstonehousing.com/js/lightbox/lightbox.min.js"></script>
	</head>
	<body>
		<div id="head">
			<div id="top_inner">
				<img src="http://sandstonehousing.com/images/logo.png" />
				<h1>Sandstone Housing</h1>
				<div id="menu_emp">
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/employee.php">Employee Home</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/calendar.php">Calendar</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/job.php">Job Opportunities</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/hr.php">HR</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/ap_onesite.php">AP/OneSite</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/tenant.php">Tenant</a></p>
					<p class="menu_button"><a href="index.php">logout</a></p>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="inner">
				<div id="employ">
					<h2>Welcome Sandstone Housing Employees!</h2>
					<p>July 2015 is here!  Let us all work to improve one area this month. Set a goal and work to meet it. </p>
				</div>
				<div id="weektip">
					<h3>Theodore Roosevelt said:</h3>
					<p>Far and away the best prize that life offers is the chance to work hard at work worth doing.</p>
				</div>
				<hr class="hundred" />
				<div id="emp_buttons">
					<a href="calendar.php"><div class="emp_button"><p class="emp">Calendar</p></div></a>
					<a href="job.php"><div class="emp_button"><p class="emp">Job Opportunities</p></div></a>
					<a href="hr.php"><div class="emp_button"><p class="emp">Human Resources</p></div></a>
					<a href="ap_onesite.php"><div class="emp_button"><p class="emp">AP/OneSite</p></div></a>
					<a href="tenant.php"><div class="emp_button"><p class="emp">Tenant</p></div></a>				
				</div>
				<div id="emp_events">
					<h3>Events</h3>
					<p>July 4 - Happy 4th of July!!</p>
					<p>July 23 - Manager's and Assistant Manager's meeting/baby shower!  10AM at Redlake Warehouse.</p>
				</div>
				<div id="emp_projects">
					<h3>July Birthdays</h3>
					<p>Happy Birthday to Wanona, Bernadette, Sylvita, and Robert!  May your day be blessed!</p>
				</div>
			</div>
		</div>	
		<div id="footer">
			<div id="innerfooter">
				<p>&copy; 2015 by Sandstone Housing. **This institution is an equal opportunity employer and provider**</p>
				<img class="about" src="http://sandstonehousing.com/images/wheelchair.gif" />
				<img class="about" src="http://sandstonehousing.com/images/opportunity.png" />
			</div>
		</div>
	</body>
</html>