<?php
function eraseBadWords($text) {
	str_replace("javascript", "[java-script]", $text);
	str_replace("<", "", $text);
	str_replace(">", "", $text);
	str_replace("html", "", $text);
	str_replace("fuck", "", $text);
	str_replace("ficken", "", $text);
	str_replace("CREATE", "", $text);
	str_replace("http://www.", "", $text);
	addslashes($text);
	return $text;
}
?>
