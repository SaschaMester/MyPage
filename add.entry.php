<?php
  include ("sql_connect.php");
  include ("filter.php");
  include ("tpl_start.php");
  ?>
  <DIV ID="navigation">
    <?php include ("navigation.php"); ?>
  </DIV>
  <div id="inhalte">
  <?php
  $name = $_POST["name"];
  $name = eraseBadWords ($name);
  if ($name == "") {
    echo "Entweder Sie haben keinen Namen eingegeben oder er wurde durch unsere Filterung gel&ouml;scht. Das Programm bricht an dieser Stelle ab.";
    die ();
  }
  
  $mail = $_POST["mail"];
  if ($mail == "") {
    echo "Bitte eine E-Mail - Adresse angeben. Das Programm bricht an dieser Stelle ab.";
    die ();
  }
  $mail = eraseBadWords ($mail);
  $datum = date("d.m.Y");
  $site = $_POST["site"];
  if ($site !== "") {
    $site_pattern = "'[a-zA-Z0-9]'";
    if (!preg_match($site_pattern, $site)) {
      echo "Wir vermuten einen Angriffsversuch. Das Programm wird abgebrochen";
      die();
    }
  }

  if (stripos($site, "http://") !== false) {
    die ("Bitte die Homepage-Adresse OHNE http:// eingeben");
  }

  if (stripos($site, "http//") !== false) {
    die ("Bitte die Homepage-Adresse OHNE http:// eingeben");
  }

  
  $site = strip_tags($site); 
  $mail = strip_tags($mail);
  $name = strip_tags($name);

  $site = mysql_real_escape_string($site);
  $mail = mysql_real_escape_string($mail);
  $name = mysql_real_escape_string($name);
  $comment = $_POST["comment"];
  $comment = mysql_real_escape_string($comment);
  $comment = eraseBadWords ($comment);
  $comment = nl2br($comment);
  $comment = strip_tags($comment);
  $comment = htmlentities($comment);
  $length_comment = strlen($comment); 
    if ($length_comment < 20) {
      echo "Bitte nur sinnvolle Kommentare abgeben"; 
      die();
    }
    
    /* $comment_pattern = "'[a-zA-Z0-9]'"; 
    if (!preg_match($comment_pattern, $comment)) {
      echo "Wir vermuten einen Angriffsversuch. Das Programm bricht an dieser Stelle ab";
        die();
    }
    */ 
  
  if ($comment == "") {
    echo "Sie haben keinen Beitrag eingegeben. Das Programm bricht an dieser Stelle ab!";
    die ();
  }
  
  if (stripos($comment, "http://") !== false) {
    die("Bitte keine Internet-Adressen angeben");
  }

  if (stripos($comment, "http//") !== false) {
    echo "Bitte keine Internet-Adressen angeben"; 
    die();
  }

  if (stripos($comment, "www.") !== false) {
    die ("Bitte keine Internet-Adressen angeben");
  }

  if (stripos($comment, "viagra") !== false) {
    die ("Bitte keine Werbung f?r Sexualprodukte");
  }

  if (stripos($comment, ".net") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($comment, ".com") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($comment, ".de") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($comment, ".org") !==false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($comment, ".info") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($comment, "www.") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }


  if (stripos($name, "http://") !== false) {
    die("Bitte keine Internet-Adressen angeben");
  }

  if (stripos($name, "http//") !== false) {
    echo "Bitte keine Internet-Adressen angeben"; 
    die();
  }

  if (stripos($name, "www.") !== false) {
    die ("Bitte keine Internet-Adressen angeben");
  }

  if (stripos($name, "viagra") !== false) {
    die ("Bitte keine Werbung f?r Sexualprodukte");
  }

  if (stripos($name, ".net") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($name, ".com") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($name, ".de") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($name, ".org") !==false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($name, ".info") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }

  if (stripos($name, "www.") !== false) {
    die ("Bitte keine Internet-Adressen eingeben");
  }


  if (stripos($mail, "@") === false) {
    die ("Eine Mail-Adresse enth?lt grunds?tzlich das @-Zeichen.");
  }

  if (stripos($mail, "http://") !== false) {
    die ("Eine Mail-Adresse enth&auml;lt KEIN http://");
  }

  $ip = md5(getenv(REMOTE_ADDR));
  $fehler = "Sie haben heute schon einen Eintrag hinterlassen. Deshalb k&ouml;nnen Sie keinen weiteren verfassen";
  

 // Heute schon einen Eintrag vorgenommen ? 
 
 $ipdatequery = "SELECT ip, datum FROM gaestebuch WHERE datum = '$datum' AND ip = '$ip'";
  $sqlipdate = mysql_query ($ipdatequery);
  $ipdateresult = mysql_num_rows ($sqlipdate);
  if ($ipdateresult == 3) {
    echo $fehler;
    die();
  }

// Wenn IP-?berpr?fung bestanden, Eintrag durchf?hren

  $eintrag = "INSERT INTO gaestebuch (name, email, datum, homepage, kommentar, ip) VALUES ('$name', '$mail', '$datum', '$site', '$comment', '$ip')";  
  $eintragen = mysql_query($eintrag); 
  include ("gbread.php");
?>
</DIV>
<DIV ID="rechts">
  <?php include ("rechts.php"); ?>
</DIV>
<?php include ("tpl_close.php"); ?>
