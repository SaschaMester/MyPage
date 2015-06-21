<?php
include ("sql_connect.php");

$ip = md5(getenv(REMOTE_ADDR));
$ban_query = "SELECT * FROM banned_ip WHERE ip = '$ip'";
$banresult = mysql_query($ban_query);
$ban_anzahl = mysql_num_rows($banresult);
if ($ban_anzahl > 0) {
die ("</DIV><DIV id=\"inhalte\">Ihnen wurde eine IP-Sperre verhängt. <br /> You were blocked by the Site Admin<BR></DIV>");
}
$query = "SELECT * FROM contents WHERE status = 'aktiv' AND category != 'Interaktiv' ORDER BY category";
$result = mysql_query($query);
while ($row = mysql_fetch_object ($result)) {
	$titel = $row->titel;
	$link = $row->link;
	if ($row->link == "http://brokensoul1979.blogspot.com") {
	$target = "_blank";
	} else {
	$target = ""; 
	}
	?>
	<A HREF="<?php echo $row->link; ?>" target="<?php echo $target; ?>"><?php echo $row->titel; ?></A><H2>------</H2>
	<?php
}
$ip = md5(getenv(REMOTE_ADDR));
$tag = date("d");
$monat = date("m");
$jahr = date("Y");
$countquer = "SELECT * FROM counter WHERE ip = '$ip' AND tag = '$tag' AND monat = '$monat' AND jahr = '$jahr'";
$countresult = mysql_query($countquer);
$anzahl = mysql_num_rows($countresult);
if ($anzahl == 0) {
$eintragen = "INSERT INTO counter (ip, tag, monat, jahr) VALUES ('$ip', '$tag', '$monat', '$jahr')";
$eintrag = mysql_query($eintragen);
}

?>
