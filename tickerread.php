<?php
include("sql_connect.php");

$sql_query = "SELECT * FROM ticker ORDER BY id DESC";

$result = mysql_query($sql_query);
?>
<html>
<body bgcolor="black" link="red" alink="red" vlink="red">
<font face="Comic Sans MS" color="red" size="3">
<marquee>
<?php
while($row = mysql_fetch_object($result))
{
  $schlagzeile = $row->schlagzeile;
  $url = $row->url;
  echo('<a href="'.$row->url.'" target="_blank">'.$row->schlagzeile.'</a> - ');
}
?>
</marquee>
<CENTER>Dieser Newsticker wird von <a href="http://brokensoul1979.cwsurf.de" target="_blank">brokensoul1979.cwsurf.de</a> zur Verf&uuml;gung gestellt!</CENTER>
</font>
</body>
</html>