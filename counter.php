<?php
include ("sql_connect.php"); 
include ("tpl_start.php"); 
?>

<DIV id = "navigation">
<H1>Hauptmenü</H1><BR><H2>-----</H2><BR><BR>
<?php include ("navigation.php"); ?>
</DIV>

<DIV id = "inhalte">
<H1>COUNTER</H1>

<?php
// IP ermitteln
$ip = getenv(REMOTE_ADDR);

// Gesamtanzahl der Besucher ermitteln 
$gesamt = "SELECT * FROM counter";
$gesamt_query = mysql_query($gesamt);
$besucher_gesamt = mysql_num_rows($gesamt_query);

// Besucher des aktuellen Monats ermitteln

$tag = date(d);
$monat = date("m");
$jahr = date("Y");
$visit_month = "SELECT * FROM counter WHERE jahr = '$jahr' AND monat = '$monat'";
$monat_query = mysql_query ($visit_month);
$besucher_monat = mysql_num_rows($monat_query);

// Besucher des aktuellen Jahres ermitteln

$visit_jahr = "SELECT * FROM counter WHERE jahr = $jahr";
$jahr_query = mysql_query($visit_jahr);
$besucher_jahr = mysql_num_rows($jahr_query);

// Besucher des heutigen Tages ermitteln

$visit_day = "SELECT * FROM counter WHERE tag = '$tag' AND monat = '$monat' AND jahr = '$jahr'";
$day_query = mysql_query($visit_day);
$besucher_heute = mysql_num_rows($day_query);
if ($besucher_heute == "1") {
$haben = "hat";
} else {
$haben = "haben";
}
?>

<P>Wir schreiben das Jahr <B><?php echo $jahr; ?>.</B> In diesem Jahr wurde diese Seite <B><?php echo $besucher_jahr; ?> mal</B> besucht. </P>

<P><B>In diesem Monat</B> konnte diese Webseite <B><?php echo $besucher_monat; ?> Besucher</B> verzeichnen.</P> 

<P><B>Am heutigen Tage <?php echo $haben . " " . $besucher_heute; ?> Besucher</B> diese Seite gesehen.</P>

<P><B>Insgesamt</B> wurde <B><?php echo $besucher_gesamt; ?> mal</B> auf diese Webseite zugegriffen.</P>

<P>Seitenaktualisierungen werden <B>nicht</B> gez&auml;hlt. Hierf&uuml;r sorgt eine IP-&Uuml;berpr&uuml;fung. Somit ist es nicht möglich, die Zählerstände durch Seitenaktualisierung 
zu manipulieren.</P>
<P>Ihre IP <?php echo $ip; ?> wird seit dem 12.06.2015 anonymisiert in der Datenbank gespeichert.
Die Form, in der uns Ihre IP <?php echo $ip; ?> l&auml;ngerfristig vorliegt,
schaut also SO aus: <?php echo md5($ip); ?>. </P>
<P>Daher ist auch der Z&auml;hlerstand nicht mehr aktuell - IP-Nummern, die im Klartext vorlagen, sind gel&ouml;scht - daher liegen auch die alten Z&auml;hlerst&auml;nde nicht
mehr vor.</P>
</DIV>

<DIV id="rechts">
<?php 
include ("rechts.php"); 
?>
