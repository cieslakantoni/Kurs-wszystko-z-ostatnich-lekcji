<?php
  $dni = 30;
  if (!isset($_COOKIE['licznik'])) {
    $licznik = 1;
  }else {
    $licznik = $_COOKIE['licznik'];
    $licznik++;
  }

  setcookie('licznik', $licznik, time()+60*60*24*$dni);
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Licznik</title>
  </head>
  <body>
<?php
  if ($licznik == 1) {
    echo $_COOKIE['licznik'];
  }else{
    echo $licznik;
  }


 ?>
  </body>
</html>
