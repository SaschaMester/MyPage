<?php

if (isset($_POST['pass']))
{
  echo strtoupper(sha1(md5($_POST['pass']))); 
  die();
}
?>

<!DOCTYPE html>
  <head>
    <title>Passwort-Hasher</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Sascha Mester">
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
      <td>
        <tr>Bitte das gew&uuml;nschte Passwort unten angeben:</tr><br />
        <tr><input type="password" length="20" name="pass"></tr><br />
        <tr><input type="submit" value="Absenden"></tr><br />
      </td>
    </table>
    </form>
  </body>
</html>
