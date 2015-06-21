<?php
include ("tpl_start.php"); 
include ("sql_connect.php");
?>
<DIV ID="navigation">
  <H1>Hauptmenü</H1><BR><H2>-----</H2><BR><BR>
  <?php include ("navigation.php"); ?>
</DIV>
<DIV ID="inhalte">
  <H1>Eintrag verfassen</H1><CENTER>
<?php
$ip = getenv(REMOTE_ADDR);
?>
  <P>Mit dem Absenden Ihres Eintrages stimmen Sie der Speicherung Ihrer IP-Adresse  <?php echo $ip; ?> zu. Sie wird anonymisiert gespeichert in der Form <?php echo md5($ip); ?> und wird
  ben&ouml;tigt, um Spameintr&auml;ge zu vermeiden.</P>

  <P>Es ist nicht gestattet, HTML-Tags zu benutzen. Diese werden durch die Gästebuch-Software wieder herausgefiltert, bevor Ihr Eintrag gespeichert wird.</P>

  <P>Aus urheberrechtlichen Gründen möchte ich darum bitten, KEINE Gästebuch-Einträge zu verfassen, die der Veröffentlichung eigener Texte dienen. Das heisst, Gedichte, Prosa, Lyrik haben im G&auml;stebuch nichts verloren.</P>

 
<FORM ACTION="add.entry.php" METHOD="post" >
  <p>
		<table>
        <tr><td>Ihr Name:</td></tr>
        <tr><td><input id="name" name="name" type="text" size="105" maxlength="60"></td></tr>
      </p>
      <p>
        <tr><td>Ihre Mail-Adresse (wird nicht veröffentlicht!) :</td></tr>
        <tr><td><input id="mail" name="mail" type="text" size="105" maxlength="60"></td></tr>
      </p>
      <p>
        <tr><td>Ihre Homepage:</td></tr>
        <tr><td>http://<input id="site" name="site" type="text" size="95" maxlength="60"></td></tr>
      </p>
      <p>
        <tr><td>Ihr Kommentar: </td></tr>
        <tr><td><textarea id="comment" name="comment" cols="80" rows="20" wrap="soft"></textarea><br /></td></tr>
        <tr><td align="center"><input type="submit" value="Abschicken"></td></tr>
      </p>
	  </table>
</DIV>
<DIV id="rechts">
<?php include ("rechts.php"); 
?>
  
