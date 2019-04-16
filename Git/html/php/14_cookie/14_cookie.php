<?php
  if (!isset($_COOKIE['kurs'])){
    setcookie('kurs', 'Kurs programowania');
    $komunikat = 'Cookie o nazwie kurs nie było ustawione';
  }else{
    $komunikat = 'Cookie o nazwie kurs jest ustawione<br>';
    $komunikat .= 'Wartość ciasteczka: '.$_COOKIE['kurs'];
  }
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>
    <?php
    echo $komunikat;
     ?>
  </body>
</html>
