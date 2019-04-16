<?php
  session_start();
  $sessionId = session_id();
  $auth = $arrayName = array(
    array('root','a','Poznań','admin'),
    array('julia','a','Gniezno','user'),
    array('jan','a','Poznań','user'),
    array('ja','a','Poznań','moderator'),

  );

  if (!empty($_POST['login']) && (!empty($_POST['haslo']))) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    //if ($login == $auth['login'] && $haslo == $auth['haslo']) {

      for ($i=0; $i < count($auth); $i++) {
        if ($auth[$i][0]== $login) {
          if ($haslo == $auth[$i][1]) {
            $_SESSION['zalogowany']['login'] = $login;
            $_SESSION['zalogowany']['miasto'] = $auth[$i][2];
            $_SESSION['zalogowany']['uprawnienia'] = $auth[$i][3];
            $_SESSION['zalogowany']['sessionId'] = $sessionId;
            break;

          }
        }
      }

      $_SESSION['blad'] = "Błędny login lub hasło!";
      header('location:./index.php');
    }else {
      $_SESSION['blad'] = "Wypełnij wszystkie pola!";
      header('location:./index.php');
    }






 ?>
</span>
