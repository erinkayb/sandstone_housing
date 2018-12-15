<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Employee Login</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="icon" type="image/png" href="http://sandstonehousing.com/images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
		<link rel="stylesheet" type="text/css" href="http://sandstonehousing.com/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="http://sandstonehousing.com/css/styles.css" />
	</head>
	<body>
	<div id="wrap">
		<div id="login_head">
			<h1>Sandstone Employee Login Page</h1><br />
			<hr />
		</div>
		<div id="loginform">
			<form id="loginform" name="loginform" action="login_exec.php" method="post">
    			<p>Username:
    			<input class="loginform" name="username" type="text" /></p>
  				<p>Password:
    			<input class="loginform" name="password" type="password" /></p>
  				<input class="login_button" name="" type="submit" value="login" />
  				<!--the code bellow is used to display the message of the input validation-->
				<?php
					if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($SESSION['ERRMSG_ARR']) >0 ) {
					echo '<ul>';
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
					echo '<li>',$msg,'</li>'; 
					}
					echo '</ul>';
					unset($_SESSION['ERRMSG_ARR']);
					}
				?>
  			</form>
  		</div>
	</body>
</html>