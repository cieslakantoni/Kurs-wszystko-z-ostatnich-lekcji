<?php
  session_start();
  if (isset($_SESSION['zalogowany'])){
    header('location:./zalogowany.php');
      $uprawnienia = $_SESSION['zalogowany']['uprawnienia'];
      switch ($uprawnienia) {
        case 'admin':
          header('location: ./admin.php');
          break;
        case 'user':
        header('location: ./user.php');
          break;
        case 'moderator':
        header('location: ./moderator.php');
        break;
      }
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
    if(isset($_GET['wyloguj'])){
      echo '<span class="wyl">'."Wylogowano Cię z serwera".'</span>';
    }

    if (isset($_SESSION['blad'])) {
      echo '<span class="wpola">'.$_SESSION['blad'].'</span>';
    }


     ?>
    <form  action="sprawdz.php" method="post">
      <input type="text" name="login"placeholder="Login"  autocomplete="off"><br>
      <input type="password" name="haslo" placeholder="Hasło"><br>
      <input type="submit" name="przycisk" value="Zaloguj się">
    </form>
    <?php



     ?>
  </body>
</html>
