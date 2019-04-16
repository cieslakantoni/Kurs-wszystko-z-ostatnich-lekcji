<?php session_start();

if (!isset($_SESSION['zalogowany'])) {
  header('location:./index.php');
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zalogowany</title>
  </head>
  <body>
<?php
  echo 'Login: '.$_SESSION['zalogowany']['login'],'<br>';
  echo 'Miasto: '.$_SESSION['zalogowany']['miasto'],'<br>';
  echo 'ID SESSION: '.$_SESSION['zalogowany']['sessionId'],'<br>';
 ?>
 <a href="./wyloguj.php?wyloguj=1">Wyloguj się</a>
  </body>
</html>
