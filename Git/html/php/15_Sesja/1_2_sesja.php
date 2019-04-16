<?php
  session_start();
  unset($_SESSION['imie']); //usunięcie zmiennej sesyjnej
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja</title>
  </head>
  <body>
    <?php
    echo "Witaj ",$_SESSION['imie']," na trzeciej stronie!<hr>";
    echo "Identyfikatorem sesji jest: ", session_id();
     ?>
     <hr>
     <a href="1_2_sesja.php">Kolejna strona</a>
     
  </body>
</html>
