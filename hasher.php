<?php
$pass = $_GET['pass'];
echo strtoupper(sha1(md5($pass)));
?>

