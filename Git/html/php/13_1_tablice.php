<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie Tablice</title>
  </head>
  <body>

    <form action="./13_2_tablicef.php"  method="post">
      Podaj ilość ulubionych kolorów <br>
      <input type="text" name="ilosc"><br>
      <input type="submit" name="przycisk" value="Pokaż">
    </form>

<?php
/* Użytkownik podaje z klawiatury w formularzu, ile ma ulubionych kolorow,
po zatwierdzeniu, wyświetli mu się na tej samej stronie ilość pól tekstowych
jaką podał w poprzednim formularzu.
Zapisz ulubione kolory do tablicy, posortuj je nie malejąco i wyświetl na ekranie
w formacie ( funckja ):
Ilość ulubionych kolorów: ...
Kolor 1: ...
Kolor 2: ...
Kolor 3: ... */




require_once('13_2_tablicef.php');

if (isset($_POST['przycisk'])){
    if (!empty($_POST['ilosc'])){
      $ilosc = $_POST['ilosc'];
      echo "<form>";
      echo "<br>";
       for ($i=1; $i <= $ilosc ; $i++) {
         $nazwa = "test$i";
         echo '<input type="text" name="'.$nazwa.'"><br>';
       }
       echo '<input type="hidden" name="ilosc" value="'.$ilosc.'"><br>';
       echo '<input type="submit" name="przyciskK"><br>';
       echo "</form>";
     }else {
          echo "Podaj wartość!";
        }
    }

      if (isset($_GET['przyciskK'])) {
        $ilosc = $_GET['ilosc'];
        $tab = array();
        for ($i=1; $i <= $ilosc ; $i++) {
          echo "<br>";
          $x =$_GET["test$i"];
          array_push($tab, $x);
          echo $x;
        }
        //print_r($tab);
        echo "<br>";
        sort($tab);

        wyswietl($tab, $ilosc);
      }










       ?>

     </body>
     </html>
