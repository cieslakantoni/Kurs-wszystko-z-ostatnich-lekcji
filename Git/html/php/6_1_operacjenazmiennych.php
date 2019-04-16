<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6_1_</title>
  </head>
  <body>
    <!-- Użytkownik podaje z klawiatury dwie wartosci
         Jeśli nie poda liczby to wyświetl mu komunikat o tresci:" Podaj dwie
         liczby calkowite"
         Jeśli nie wpisał nic w pola wyświetl mu komunikat o treści: 'Oba pola są puste'
         Liczby mogą być z przedziału od <0;100>
         Jeśli nie będa to wyświetl komunikat:
         'Podales liczby przekraczajace zakres'.
         Porównaj dwie liczby z sobą po prawidłowym
         podaniu i wyświetl komunikat o tresci:
         'Pierwsa liczba jest mniejsza od drugiej'
         'Druga liczba jest mniejsza od pierwszej liczby'
         'Liczby są równe' -->

         <form method="post">
            <input type="text" name="liczba1"placeholder="Liczba 1"><br>
            <input type="text" name="liczba2"placeholder="Liczba 2"><br>
            <input type="submit" name="przycisk" value="Wyślij">
         </form>
<?php

if (isset($_POST['przycisk'])) {
  if (!empty($_POST['liczba1']) && !empty($_POST['liczba2'])) {
    if ($_POST['liczba1'] > 0 ||$_POST['liczba1'] < 100 ||$_POST['liczba2'] > 0 || $_POST['liczba1'] < 100){
    }else{
        echo "Podaj liczby z przedziału 0 - 100";
      }
    $l1 = $_POST['liczba1'];
    $l2 = $_POST['liczba2'];
    $l1 = (int)$l1;
    $l2 = (int)$l2;
    $porownanie = $l1 <=> $l2;
    echo "Pierwsza liczba: $l1<br>";
    echo "Druga liczba: $l2<br>";

  switch ($porownanie) {
    case -1:
      echo 'Pierwsza liczba jest mniejsza od drugiej ';
      break;
    case 0:
      echo 'Liczby są równe ';
      break;
    case 1:
      echo 'Druga liczba jest mniejsza od pierwszej liczby ';
      break;
    }
  }else{
    echo 'Wypełnij wszystkie pola';
   }


}














?>
  </body>
</html>
