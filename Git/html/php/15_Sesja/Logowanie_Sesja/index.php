<?php
  session_start();
  if (isset($_SESSION['zalogowany'])){
    header('location:./zalogowany.php');

  }
 ?>
 <!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zalogowano</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <h2>Logowanie do systemu</h2>
    <?php
    if(isset($_GET['wylogowany'])){
      echo '<span class="wyl">'."Wylogowano Cię z serwera".'</span>';
    }

    if (isset($_SESSION['blad'])) {
      echo '<span class="wpola">'.$_SESSION['blad'].'</span>';
    }

     ?>
    <form  action="sprawdz.php" method="post">
      <input type="text" name="login"placeholder="Login"  autocomplete="off" autofocus><br>
      <input type="password" name="haslo" placeholder="Hasło"><br>
      <input type="submit" name="przycisk" value="Zaloguj się">
    </form>
    <?php



     ?>
  </body>
</html>
