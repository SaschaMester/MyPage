<?php 

// Deutsche Datumsformatierung 

$tage = array ("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"); 
$tag = date("w");
$monate = array (1=>"Januar",
		   2=>"Februar",
                 3=>"M&auml;rz",
                 4=>"April",
                 5=>"Mai",
                 6=>"Juni", 
                 7=>"Juli",
                 8=>"August", 
                 9=>"September", 
                10=>"Oktober",
                11=>"November",
                12=>"Dezember");
$monat=date("n"); 
$jahr = date("Y");
$datum_define = $tage[$tag] . ", der " . date("d.") . " " . $monate[$monat] . " " . date("Y");

// Begrüssung definieren

if (date("G") > 16) {
$begr = "Guten Abend";
}

if (date("G") < 11) {
$begr = "Guten Morgen";
}

if (date("G") > 11 && date("G") < 16) {
$begr = "Guten Tag";
}

?>
