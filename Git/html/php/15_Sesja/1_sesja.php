<?php
  session_start();
  $_SESSION['imie'] = 'Janusz';
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja</title>
  </head>
  <body>
    Witamy
    <?php
    if (isset($_GET['usunSesje'])) {
      session_destroy();
    }
    echo $_SESSION['imie']," na stronie<hr>";
    echo "Identyfikatorem sesji jest: ", session_id();
     ?>
     <hr>
     <a href="./1_1_sesja.php">Następna strona</a><br>
     <a href="./1_sesja.php?usunSesje">Usuń sesje</a>
  </body>
</html>
