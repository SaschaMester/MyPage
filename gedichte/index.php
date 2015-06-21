<?php
  include ("sql_connect.php"); 
  include ("tpl_start.php"); 
?>
<DIV ID="navigation">
  <P><H1>Gedichte</H1></P>
  <?php include ("navigation.php"); ?>
</DIV>

<DIV ID="inhalte">
    <H1>Bitte im Men&uuml; links eine Kategorie wählen!</H1>
    <?php  
  $cat = $_GET['cat'];
  $cat = mysql_real_escape_string($cat);
  $cat = htmlentities($cat);
  if ($cat !="") {
  echo "In dieser Kategorie sind folgende Werke enthalten:<BR> ";
  $mysqlquery = "SELECT * FROM gedichte_administrativ WHERE category = '$cat' ORDER BY titel";
  $ergebnis = mysql_query ($mysqlquery);
  if (mysql_num_rows($ergebnis) == 0) {
    die("Die angeforderte Kategorie existiert nicht");
  }
  echo "<H1>Kategorie: " . $cat . "</H1>";
  while ($row = mysql_fetch_object ($ergebnis)) {
    $browse_title = $row ->browse_title; 
    $titel = $row ->titel;
    ?>
    <A HREF="show.php?cat=<?php echo $_GET['cat']; ?>&browse_title=<?php echo $row->browse_title; ?>"><?php echo $row->titel; ?></A>
    <?php 
    
  }
  }
?>
</DIV>
<div id="rechts">
<H1><P>Hauptmenü</P></H1>
<P><B><A HREF="../index.php" CLASS="backlink">Startseite</A></B></P>
<?php include ("../navigation.php");
include ("../rechts.php"); 
?>
