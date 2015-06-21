<?php
$ip = getenv(REMOTE_ADDR);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="robots" content="noindex, follow" />
    <meta charset="utf-8">
    <title>WARNUNG!</title>
  </head>
  <body>
    <center>Datenschutzhinweis</center>
    <P>Ihr Zugriff auf diese Webseite wird durch einen Counter gezählt werden.</P>
    <P>Ihr Surfverhalten auf der Seite wird <b>NICHT</b> verfolgt, allerdings speichert
    der Besucherzähler ihre IP <?php echo $ip; ?> in einer anonymisierten Form.<br />
    Die Form, in der Ihre IP gespeichert wird, schaut folgendermassen aus: <?php echo md5($ip); ?>.<br />
    Klicken Sie <a href="index.php">hier</a>, wenn Sie damit einverstanden sind.</P>
    <P>Wenn Sie damit nicht einverstanden sein sollten, wünsche ich Ihnen noch einen schönen 
    Tag und viel Spaß beim Stöbern in den Weiten des Internets.</P>
    <P>Der Zugriff auf diese Warnung wurde nicht gezählt.</P>
    <P>Um diesen Hinweis nicht bei jedem Seitenbesuch sehen zu müssen, können Sie in Ihrem Browser
    ein Lesezeichen auf <a href="index.php">http://brokensoul1979.pfweb.eu/index.php</a> setzen.</P>
    <?php /* Diese Seite <?php echo $_SERVER['PHP_SELF']; ?> wurde lediglich nachträglich vorgeschaltet, um auf die IP-Speicherung hinzuweisen */ ?> 
  </body>
</html>
