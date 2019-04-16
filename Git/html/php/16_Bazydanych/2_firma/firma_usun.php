<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Firma-łączenie z bazą danych</title>
    <link rel="stylesheet" href="./1_firma.css">
  </head>
  <body>

    <?php
      //połączenie z serwerem MariaDB

      if ($polaczenie = mysqli_connect('localhost', 'root', '' )) { //operator ignorowania bledów - @
        echo "Prawidłowe połączenie z serwerem<br>";
      }else {
        //echo "Brak połączenia z serwerem<br>";
        exit ("Brak połączenia z serwerem<br>");
      }
      echo "<br>";


      // połączenie z bazą danych

      if (mysqli_select_db($polaczenie, 'firma')) {
        echo "Połączyłeś się z bazą danych: firma";
      }else {
        exit ("Brak połączenia z bazą danych: firma");
      }
      echo "<br>";
      echo "<br>";

      // polskie znaki

      mysqli_set_charset($polaczenie, 'utf8');

      $sql = "SELECT imie, nazwisko, miasto FROM pracownik";

      if ($rezultat = mysqli_query($polaczenie, $sql)) {
        echo "Prawidłowe zapytanie<br>";
      }else {
        echo "Błędne zapytanie<br>";
      }



      //sprawdzenie czy istnieje zmienna GET-['usun']

      if (isset($_GET['usun'])) {
        $id = $_GET['usun'];
        $sql = "DELETE FROM `model` WHERE `model`.`modelid`=$id";

        mysqli_query($polaczenie,$sql);
        }

      //wyswietlnie bazy danych, marka, model, posortuj dane według marki, nie malejąco

      $sql = "SELECT m.marka, mo.model, mo.idmarka FROM marka AS m INNER JOIN model as mo ON m.idmarka=mo.idmarka ORDER BY idmarka";

      if ($rezultat = mysqli_query($polaczenie, $sql)) {
        $liczba = mysqli_num_rows($rezultat);
        $liczba2 = mysqli_num_fields($rezultat);

        echo "<h3>Liczba Marek: ".$liczba."</h3>";
        echo "<h3>Liczba kolumn: ".$liczba2."</h3>";
        echo '<table border="1">';
        echo "<th class='tytul'>Marka</th>";
        echo "<th class='tytul'>Model</th>";
        echo "<th class='tytul'>Usuń</th>";
      while ($wiersz = mysqli_fetch_assoc($rezultat)) {
        $id = $wiersz['idmarka'];
        echo "<tr>";
          echo "<td>$wiersz[marka]</td>";
          echo "<td>$wiersz[model]</td>";
          //echo "<td>$wiersz[idmarka]</td>";
          echo '<td class="red"><a class="red" href="firma_usun.php?usun='."$id".'">Usuń</a></td>';
        echo "</tr>";

      }
      echo "</table>";

      mysqli_close($polaczenie);
    }else {

      echo "Błędne zapytanie";
    }

     ?>

  </body>
</html>
