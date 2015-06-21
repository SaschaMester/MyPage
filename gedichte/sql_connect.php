<?php
$host="127.0.0.1";
$user="gnuwaresql1";
$pass="admin928143";
$db="gnuwaresql1";
  $link=@mysql_connect($host, $user, $pass) or header('Location:htmlversion/index.html');
mysql_select_db($db, $link);
?>