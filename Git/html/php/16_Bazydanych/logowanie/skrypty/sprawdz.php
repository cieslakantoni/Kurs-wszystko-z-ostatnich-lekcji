<?php
if (!empty($_POST['login']) && !empty($_POST['haslo'])) {
  $login = $_POST['login'];
  $haslo = $_POST['haslo'];
  require_once('./polaczenie.php');
  $sql ="SELECT haslo FROM `user` WHERE login = \"$login\"";
    if ($reultat = $polaczenie->query($sql)) {
      if ($polaczenie->affected_rows > 0) {
        //echo $polaczenie->affected_rows;
        $wiersz = $rezultat->fetch_assoc();
        $passhash = $wiersz['haslo'];
        //echo $passhash;

        if (password_verify ($haslo ,$passhash )){
          echo "Login i hasło ok";
        }else {
          echo "Błędny login lub hasło!";
        }

        exit();
      }else {
        //uzytkownik o podanym loginie nie istnieje lub wpisał błędnie hasło
        //header('location: ../index.php');
      }
    }else {
      echo "Błędne zapytanie";
    }
}else {
  header('location: ../index.php');
}
/*

SESSION !!!


Zad. dom.
Dokończyć system logowania.
zmodyfikowac bazę danych i dodać tabele z uprawnieniami i dodatkowe pole (klucz obcy) w tabeli user.
zmodyfikowac formularz rejestracji gdzie użytkowikowi bedzie automatycznie zwyklym userem, pole ukryte.

***
uzytkownik po zalogowaniu bedzie miał odpowienie uprawnienia (admin, user, moderator),
bedzie przekierowany do strony zalogowany.php i w zaleznosci od uprawnien bedzie miał różny kontent

***
Administrator bedzie miał mozliwosc dodania nowego uzytkownika, edycji danych, i wyswietla mu się wszyscy uzytkownicy.
(na zajecia dodac paginaja).








*/
 ?>
