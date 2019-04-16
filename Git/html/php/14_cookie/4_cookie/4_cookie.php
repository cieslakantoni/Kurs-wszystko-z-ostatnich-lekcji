<!--
Nie przechowuj tak hasła!!!
Użytkonik loguje się do strony:
Login: Jan
Hasło: Okoń

Jeśli poda prawidłowe dane to na stronie wyświetli się komunikat:
"Witaj Jan!", w przeciwnym razie wyświetli się formularz logowania.
Hasło podane przez użytkownika, zapisz do Ciasteczka o nazwie "pass".
Sprawdzaj ciasteczka po wejsciu na stronie.
-->

<?php

  if (isset($_COOKIE['pass']) && $_COOKIE['pass'] == 'okoń'){
    //komunikat
    echo "Witaj Jan!";
  }else{
    //form
    echo <<< FORM
    <form method="post">
    <input type="text" name="login" placeholder="Podaj Login" ><br>
    <input type="password" name="pass" placeholder="Podaj Hasło"><br>
    <input type="submit" name="przycisk" value="Prześlij">
    </form>
FORM;
  }

  if(isset($_POST['przycisk']) && (empty($_POST['login']) || empty($_POST['pass']))){
    echo "Uzupełnij wszystkie dane!";
  }elseif(isset($_POST['przycisk']) && !empty($_POST['login']) || !empty($_POST['pass'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];

  if ($login != "jan" || $pass != "okoń") {
    echo "Błędny Login lub Hasło!";
  }else {
    setcookie('pass', 'okoń');
    header('location:./4_cookie.php');
  }
}

?>
