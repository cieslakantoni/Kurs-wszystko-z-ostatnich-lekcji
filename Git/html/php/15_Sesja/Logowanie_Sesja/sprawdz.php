<?php
  session_start();
  $sessionId = session_id();

  $auth = $arrayName = array(
    'login' => 'root',
    'haslo' => 'a',
    'miasto' => 'Poznań'
  );

  if (!empty($_POST['login']) && (!empty($_POST['haslo']))) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    if ($login == $auth['login'] && $haslo == $auth['haslo']) {
      $_SESSION['zalogowany'] = array(
        'login' => $login,
        'miasto' => $auth['miasto'],
        'sessionId' => $sessionId
      );
      header('location:./zalogowany.php');
      exit();
    }else {
      //błedny login lub haslo
      $_SESSION['blad'] ="Błędny login lub hasło!";
    }
  }else {
    //Sprawdzamy czy nie wypelił wszystkich pól podczas logowania
    $_SESSION['blad'] ="Wypełnij wszystkie pola!";
  }
  header('location:./index.php');





 ?>
</span>
