<?php

$host = "ap-cdbr-azure-southeast-b.cloudapp.net"; // MySQL host name eg. localhost
$user = "b2625c7afdd4d2"; // MySQL user. eg. root ( if your on localserver)
$password = "52b7d1ae"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "acsm_fd019110f404540"; // MySQL Database name

// Connect to MySQL Database
$db = mysql_connect($host, $user, $password) or die("Could not connect to database");

// Select MySQL Database
mysql_select_db($database, $db);

?>
