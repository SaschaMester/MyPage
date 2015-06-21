<?php
  // include ("tpl_start.php");
include ("sql_connect.php");

$abfrage = "SELECT * FROM gaestebuch ORDER BY id DESC LIMIT 5";
$ergebnis = mysql_query($abfrage);
echo "<H1>Es werden nur die letzten 5 Einträge angezeigt</H1>";
while ($row = mysql_fetch_object($ergebnis))
{
$kommentar = $row->kommentar;
//$kommentar = htmlentities($kommentar);
$datum = $row->datum;
if ($datum == "") {
  $datum = "(Kein Datum angegeben)";
}
echo "<H1>-----</H1>";
$kommentar = nl2br($kommentar);
echo "<b><p>";
echo "$row->id.) $row->name schrieb am $datum:";
echo "<br />";
echo "$kommentar<br /><br />";

if ($row->homepage !="") {
echo "Besuche doch auch $row->name 's <a href=\"http://$row->homepage\" target=\"_blank\">Homepage</a>";
}
echo "<br />";
echo "</p></b>";
}


?>
