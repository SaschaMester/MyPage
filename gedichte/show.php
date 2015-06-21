<?php
include ("sql_connect.php");
include ("tpl_start.php");
?>
<DIV ID="navigation">
  <P><H1>Gedichte</H1></P>
  <P><?php include ("navigation.php"); ?></P>
  
</DIV>
<DIV ID="inhalte">
  <?php
  $cat = $_GET['cat'];
  $browse_title = $_GET['browse_title'];
  $browse_title = mysql_real_escape_string($browse_title);
  $browse_title = htmlentities($browse_title);
  $cat = mysql_real_escape_string($cat); 
  $cat = htmlentities($cat);
  if ($browse_title != "webm") {
   $copy = "Sascha Mester";
    } else {
      $copy = "Andre Bl&auml;ute";
    }
  ?>
  
  <?php  
  
    $sqlquest = "SELECT * FROM gedichte_administrativ WHERE category = '$cat' AND browse_title = '$browse_title'";
    $ergebnis = mysql_query ($sqlquest); 
    $anz = mysql_num_rows($ergebnis);
    if ($anz == 0) {
      die("Fehler");
    }
    ?>
    <A HREF="index.php?cat=<?php echo $cat; ?>">Weitere Texte dieser Kategorie: <?php echo $cat; ?></A>
    <?php     
    while ($row = mysql_fetch_object ($ergebnis)) {
      ?>
      <P><H1><?php echo $row->titel; ?></H1></P>
      <?php
      echo $row->inhalt; 
      ?>
      <P><H1>&copy; by <?php echo $copy; ?></P>
        <?php if ($browse_title != "webm") {
  ?>
        <P><A HREF="http://creativecommons.org/licenses/by-sa/3.0"><IMG SRC="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" BORDER="0"></A></P></H1>
        <?php
         }
         ?>
      <A HREF="index.php?cat=<?php echo $cat; ?>">Weitere Texte dieser Kategorie</A>
	<?php
	}
	?>      
    
  
  
</DIV>
<DIV id="rechts">
  <P><H1>Hauptmen&uuml;</H1></P>
  <A CLASS="backlink" HREF="/index.php">Startseite</A>
  <P><?php include("../navigation.php"); ?></P>
<?php include ("../rechts.php"); ?>
