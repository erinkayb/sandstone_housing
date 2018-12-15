<?php
$mysql_hostname = "emplogdb.db.9872921.hostedresource.com";
$mysql_user = "emplogdb";
$mysql_password = "AaggAgSSeU9D0vMf4GoZ!@#";
$mysql_database = "emplogdb";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>