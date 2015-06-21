<?php
include ("sql_connect.php"); 
$query = "SELECT * FROM gedichte_categories ORDER BY kategorienname";
$result = mysql_query($query);
while ($row = mysql_fetch_object ($result)) {
	$kategorie = $row->kategorienname;
	$abfrage = "SELECT * FROM gedichte_administrativ WHERE category = '" . $kategorie . "'"; 
	$res = mysql_query($abfrage); 
	$anz = mysql_num_rows($res);
	if ($anz == "1") {
		$work = "Werk"; 
	} else {
		$work = "Werke"; 
	}
	?>
	<A HREF="index.php?cat=<?php echo $row->kategorienname; ?>"><?php echo $row->kategorienname; ?><BR>(<?php echo $anz; echo " "; echo $work; ?>)</A><H2>------</H2>
	<?php
}
?>