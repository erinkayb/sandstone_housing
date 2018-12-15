 <!DOCTYPE html>
<html>
	<head>
		<title>Sandstone Housing</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="icon" type="image/png" href="../images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/styles.css" />
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<div id="head">
			<div id="top_inner">
				<img src="../images/logo.png" />
				<h1>Sandstone Housing</h1>
				<div id="menu">
					<p class="menu_button"><a href="../index.html">Home</a></p>
					<p class="menu_button"><a href="about.html">About</a></p>
					<p class="menu_button"><a href="properties.html">Properties</a></p>
					<p class="menu_button"><a href="programs.html">Programs</a></p>
					<p class="menu_button"><a class="current" href="contact.html">Contact</a></p>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="inner">
				<h2>Contact Us</h2>
				<hr class="hundred" />
				<div id="left_contact">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52198.577485202935!2d-106.58245500000002!3d35.14636699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872274fde8b538d9%3A0xf2f5cc2c4c3e1dad!2sSandstone+Housing!5e0!3m2!1sen!2s!4v1405861877257" width="500" height="400" frameborder="0" style="border:0"></iframe>
				</div>
				<div id="right_contact">
					<p><span class="strong">Address:</span><br />
						6200 Seagull St. NE<br />
						Albuquerque, NM 87109<br /><br />
						<span class="strong">Phone:</span> 505-821-0193<br />
						<span class="strong">Fax:</span> 505-856-2769<br />
					</p>
					<p>Fill out this form and we will contact you:</p>

					<div id="contact-area">
						<form method="POST" action="contactengine.php">
							<label class="contact" for="Name">Name:</label>
							<input type="text" name="Name" id="Name" />
				
							<label class="contact" for="Email">Email:</label>
							<input type="text" name="Email" id="Email" />
		
							<label class="contact" for="Phone">Phone:</label>
							<input type="text" name="Phone" id="Phone" />
				
							<label class="contact" for="Message">Message:</label><br />
							<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

							<div class="g-recaptcha" data-sitekey="6LcdAP8SAAAAAENdc3lGdQ19w8QCQ--jEpaBXi-v"></div>

							<input type="submit" name="submit" value="Submit" class="submit-button" />
						</form>
					</div>
				</div>
			</div>
		</div>	
		<div id="footer">
			<div id="innerfooter">
				<p>&copy; 2014 by Sandstone Housing. **This institution is an equal opportunity employer and provider**</p>
				<img src="../images/opportunity.png" />
				<img src="../images/wheelchair.gif" />
			</div>
		</div>
	</body>
</html>