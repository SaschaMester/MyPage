<?php
include ("tpl_start.php");
include ("sql_connect.php");
include ("date.php");
?>
<DIV ID="navigation">
  <H1>Hauptmen�</H1>
  <P><?php include ("navigation.php");?>
</DIV>

<DIV ID="inhalte">

<?php
  // include ("werbung.js");
  include ("dunkelziffer.php");
if (date("j") == "1" && date("n") == "1") {
?>
<marquee>Ich w�nsche allen Besuchern dieser Homepage ein frohes neues Jahr <?php echo date("Y"); ?>:</marquee>
<?php
}

if (date("j") == "24" && date("n") == "12" || date("j") == "25" && date("n") == "12" ||  date("j") == "26" && date("n") == "12") {
?>
<marquee>Ich w�nsche allen Besuchern dieser Homepage ein gesegnetes Weihnachtsfest.</marquee>
<?php
}
?>
<CENTER>


<!-- Anzahl der vorhandenen Gedichte bestimmen -->
<?php
$sql = "SELECT * FROM gedichte_administrativ";
$abfrage = mysql_query($sql);
$anzahl = mysql_num_rows($abfrage);
?>

<img src="banner/brsoul_banner.png" alt="Banner"></CENTER>
<H1>Willkommen</H1>
<H1>Heute ist <?php echo $datum_define; ?>. </H1>


  <P><?php echo $begr; ?> und herzlich Willkommen auf meiner neuen Internet-Seite. Nach langer und m�hevoller Entwicklungsarbeit ist sie nun endlich - zumindest mit ersten Inhalten - online.</P><BR><P>In der Navigationsleiste auf der linken Leiste kannst Du einen Men�punkt ausw�hlen, der Dich interessiert. Die Seite befindet sich nat�rlich in st�ndiger Entwicklungsarbeit.</P><BR><P>Ganz fertig wird so eine Homepage ja nie. ^^</P><p><b>Diese Seite wird f�r immer frei von aktiven Inhalten ( JavaScript und Co) bleiben. Du kannst JavaScript also getrost in deinem Browser deaktivieren.</b></p><BR><P>Seit <?php echo date("Y") - 2002; ?> Jahren besch�ftige ich mich mit dem Hobby, Gedichte zu schreiben. Die in dieser Zeit entstandenen Werke sind ebenfalls hier nachzulesen.</P><BR><P>Auch andere Dinge ausser Gedichten werden hier demn�chst noch erscheinen. Lasst Euch einfach �berraschen. S�mtliche Inhalte dieser Seite (sowohl die Texte als auch die Software) unterliegen, soweit nicht anders gekennzeichnet, meinem �opyright. Ausgenommen hiervon sind die grafischen Banner. Die Banner sind jedoch auf dem gleichen Server hinterlegt, wie diese Homepage. Der Banner, den ihr oberhalb der �berschrift "Willkommen" seht, ist von mir erstellt. Ihr d�rft ihn gerne daf�r benutzen, mich auf Eurer eigenen Seite zu verlinken. Ladet ihn Euch daf�r aber bitte auf <b>EUREN</b> Server bzw Webspace.</P><BR><P>Wer sich in seinen Rechten verletzt f�hlt, schreibt mir bitte einfach eine kurze E-Mail. Die Kontaktm�glichkeiten findest Du im <A HREF="impressum.php">Impressum</A>.</P><BR><P>Im Impressum steht auch eine Mail-Adresse. Ich m�chte bitten, Kontaktw�nsche oder private Angelegenheiten per E-Mail zu kl�ren. Kommentare wie: <blockquote>Finde es schade dass wir keinen Kontakt mehr haben</blockquote> sind im G�stebuch unerw�nscht.</P><P>Nun aber w�nsche ich viel Spass beim St�bern.</p>
  <P>Zur Zeit sind <?php echo $anzahl; ?> Gedichte in der Datenbank vorhanden.</P>
  <P><a href="http://domains-for-free.de/" title="Domains-for-free.de" target="_blank">Sponsored by Domains-for-free.de</a></P>



</DIV>
<DIV ID="rechts">
  <?php include ("rechts.php");

  ?>
</DIV>

<?php include ("tpl_close.php"); ?>
