<?php
include ("tpl_start.php");
?>
<DIV ID="navigation">
  <P><H1>G&auml;stebuch</H1></P>
  <A HREF="add.php">Eintragen</A><H2>--------</H2>
  <A HREF="aeltere_eintraege.php">Alle Eintr&auml;ge anzeigen</a><H2>--------</H2>
  <P><H1>Hauptmen&uuml;</H1></P>
  <?php include ("navigation.php"); ?>
</DIV>
<DIV ID="inhalte">
  <H1>Das G&auml;stebuch</H1>
  <?php include ("gbread.php"); ?>
</DIV>
<DIV ID="rechts">
  <?php include ("rechts.php"); ?>
</DIV>