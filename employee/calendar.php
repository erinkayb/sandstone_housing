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
				<h2>Sandstone Housing Leave Request Calendar</h2>
				<div id="calendar">
					<iframe src="https://www.google.com/calendar/embed?src=97pct84he0hmihdutp8hi9o61k%40group.calendar.google.com&ctz=America/New_York"></iframe>
				</div>
				<h2>Sandstone Housing Calendar</h2>
				<div id="calendar">
					<iframe src="https://www.google.com/calendar/embed?src=hrd.sandstone%40gmail.com&ctz=America/Denver"></iframe>
				</div>
			</div>
		</div>	
		<div id="footer">
			<div id="innerfooter">
				<p>&copy; 2014 by Sandstone Housing. **This institution is an equal opportunity employer and provider**</p>
				<img class="about" src="http://sandstonehousing.com/images/wheelchair.gif" />
				<img class="about" src="http://sandstonehousing.com/images/opportunity.png" />
			</div>
		</div>
	</body>
</html>