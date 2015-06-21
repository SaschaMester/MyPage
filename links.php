<?php
include ("sql_connect.php");
include ("tpl_start.php");
?>

<DIV ID="navigation">
  <?php include ("navigation.php"); ?>
</DIV>

<DIV ID="inhalte">
  <?php
  $entries = $_GET ['entries'];
  if ($entries == "mine") {
    if ($_entries = "mine") {
      ?>
      <H1>Partner</H1>
      <?php
      $sql_query = "SELECT link, titel, banner FROM links_administrativ";
      $ergebnis = mysql_query ($sql_query);
      while ($row = mysql_fetch_object ($ergebnis)) {
        $link = $row->link;
        $text = nl2br ($row->titel);
        $banner = $row->banner;
        if ($row->banner == "") {
        ?>
        <A HREF="<?php echo nl2br ($row->link); ?>" target="_blank"><?php echo nl2br ($row->titel); ?></A>
        <BR><H1>---</H1>
        <?php } else {
        ?>
        <A HREF="<?php echo $row->link; ?>" target="_blank"><IMG SRC="<?php echo $row->banner; ?>" border="0" alt="<?php echo $row->link; ?>"></A><B$ /><H1>---</H1>
        <?php } ?>
        <?php

      }

    }
    if ($entries == "yours") {
      echo "Die M&ouml;glichkeit f&uuml;r die Webseiten-Besucher, eigene Linkvorschl&auml;ge zu posten, wird noch entwickelt";
      die ();
    }
  }
  ?>
</DIV>
<DIV id="rechts">
<?php include ("rechts.php");
?>