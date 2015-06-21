<?php
include ("tpl_start.php");
include ("sql_connect.php");
?>
<DIV ID="navigation">
  <H1>Hauptmenü</H1><BR><H2>-----</H2><BR><BR>
  <?php include ("navigation.php"); ?>
</DIV>
<DIV ID="inhalte">
<H1>G&auml;stebuch - Alle Eintr&auml;ge</H1>
<?php
$abfrage = "SELECT * FROM gaestebuch WHERE datum != '' ORDER BY id DESC";
$ergebnis = mysql_query($abfrage);
while ($row = mysql_fetch_object($ergebnis))
{
$datum = $row->datum;
if ($datum == "") {
  $datum = "Kein Datum angegeben";
}
echo "-------------------------------------------------------------------------<br />";
echo "<b><p>";
echo "$row->id.) $row->name schrieb am $datum:";
echo "<br />";
echo "$row->kommentar<br /><br />";
echo "Besuche doch auch $row->name 's <a href=\"http://$row->homepage\">Homepage</a>";
echo "<br />";
echo "</p></b>";
echo "<H1> --- </H1>";
}

?>
</DIV>
<DIV ID="rechts">
  <A HREF="/" CLASS="backlink">Startseite</A>
  <?php include ("rechts.php"); ?>
</DIV>
<?php include ("tpl_close.php"); ?>
