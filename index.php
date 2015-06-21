<?php
include ("tpl_start.php");
include ("sql_connect.php");
include ("date.php");
?>
<DIV ID="navigation">
  <H1>Hauptmenü</H1>
  <P><?php include ("navigation.php");?>
</DIV>

<DIV ID="inhalte">

<?php
  // include ("werbung.js");
  include ("dunkelziffer.php");
if (date("j") == "1" && date("n") == "1") {
?>
<marquee>Ich wünsche allen Besuchern dieser Homepage ein frohes neues Jahr <?php echo date("Y"); ?>:</marquee>
<?php
}

if (date("j") == "24" && date("n") == "12" || date("j") == "25" && date("n") == "12" ||  date("j") == "26" && date("n") == "12") {
?>
<marquee>Ich wünsche allen Besuchern dieser Homepage ein gesegnetes Weihnachtsfest.</marquee>
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


  <P><?php echo $begr; ?> und herzlich Willkommen auf meiner neuen Internet-Seite. Nach langer und mühevoller Entwicklungsarbeit ist sie nun endlich - zumindest mit ersten Inhalten - online.</P><BR><P>In der Navigationsleiste auf der linken Leiste kannst Du einen Menüpunkt auswählen, der Dich interessiert. Die Seite befindet sich natürlich in ständiger Entwicklungsarbeit.</P><BR><P>Ganz fertig wird so eine Homepage ja nie. ^^</P><p><b>Diese Seite wird für immer frei von aktiven Inhalten ( JavaScript und Co) bleiben. Du kannst JavaScript also getrost in deinem Browser deaktivieren.</b></p><BR><P>Seit <?php echo date("Y") - 2002; ?> Jahren beschäftige ich mich mit dem Hobby, Gedichte zu schreiben. Die in dieser Zeit entstandenen Werke sind ebenfalls hier nachzulesen.</P><BR><P>Auch andere Dinge ausser Gedichten werden hier demnächst noch erscheinen. Lasst Euch einfach überraschen. Sämtliche Inhalte dieser Seite (sowohl die Texte als auch die Software) unterliegen, soweit nicht anders gekennzeichnet, meinem ©opyright. Ausgenommen hiervon sind die grafischen Banner. Die Banner sind jedoch auf dem gleichen Server hinterlegt, wie diese Homepage. Der Banner, den ihr oberhalb der Überschrift "Willkommen" seht, ist von mir erstellt. Ihr dürft ihn gerne dafür benutzen, mich auf Eurer eigenen Seite zu verlinken. Ladet ihn Euch dafür aber bitte auf <b>EUREN</b> Server bzw Webspace.</P><BR><P>Wer sich in seinen Rechten verletzt fühlt, schreibt mir bitte einfach eine kurze E-Mail. Die Kontaktmöglichkeiten findest Du im <A HREF="impressum.php">Impressum</A>.</P><BR><P>Im Impressum steht auch eine Mail-Adresse. Ich möchte bitten, Kontaktwünsche oder private Angelegenheiten per E-Mail zu klären. Kommentare wie: <blockquote>Finde es schade dass wir keinen Kontakt mehr haben</blockquote> sind im Gästebuch unerwünscht.</P><P>Nun aber wünsche ich viel Spass beim Stöbern.</p>
  <P>Zur Zeit sind <?php echo $anzahl; ?> Gedichte in der Datenbank vorhanden.</P>
  <P><a href="http://domains-for-free.de/" title="Domains-for-free.de" target="_blank">Sponsored by Domains-for-free.de</a></P>



</DIV>
<DIV ID="rechts">
  <?php include ("rechts.php");

  ?>
</DIV>

<?php include ("tpl_close.php"); ?>
