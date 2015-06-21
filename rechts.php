<p><H1>Interaktiv</H1></p>
<?php

$query = "SELECT * FROM contents WHERE status = 'aktiv' AND category = 'Interaktiv' ORDER BY category";
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

?>