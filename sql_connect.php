<?php
$host=""; // Database-Host
$user=""; // Database Username
$pass=""; // Database Password
$db=""; // Name of Database
  $link=@mysql_connect($host, $user, $pass) or header('Location:htmlversion/index.html');
mysql_select_db($db, $link);
?>
