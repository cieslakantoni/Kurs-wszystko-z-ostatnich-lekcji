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

      //wyswietlenie danych z bazy
      //wyswietlenie danych z bazy: imię, nazwisko, miasto
      while ($wiersz= mysqli_fetch_row($rezultat)) {
        echo $wiersz[0]," ";
        echo $wiersz[1]," ";
        echo $wiersz[2];
        echo "<br>  ";
      }
      echo "<br><hr>";

      //wyswietlenie danych z bazy: imię, nazwisko, reestracja, cena

      $sql = "SELECT p.imie, p.nazwisko, s.rejestracja, s.cena FROM pracownik as p INNER JOIN samochody as s ON p.id=s.idPracownika";

      if ($rezultat = mysqli_query($polaczenie, $sql)) {
        echo '<table border="1">';
        echo "<th class='tytul'>Imie</th>";
        echo "<th class='tytul'>Nazwisko</th>";
        echo "<th  class='tytul'>Rejestracja</th>";
        echo "<th class='tytul'>Cena</th>";
        while ($wiersz = mysqli_fetch_assoc($rezultat)) {
          echo "<tr>";
            echo "<td>$wiersz[imie]</td>";
            echo "<td>$wiersz[nazwisko]</td>";
            echo "<td>$wiersz[rejestracja]</td>";
            echo "<td>$wiersz[cena]</td>";
          echo "</tr>";
        }
        echo "</table>";
      }else {
        echo "Błędne zapytanie";
      }


      //wyswietlnie bazy danych, marka, model, posortuj dane według marki, nie malejąco

      $sql = "SELECT m.marka, mo.model FROM marka AS m INNER JOIN model as mo ON m.idmarka=mo.idmarka ORDER BY marka";

      if ($rezultat = mysqli_query($polaczenie, $sql)) {
        $liczba = mysqli_num_rows($rezultat);
        echo "<h3>Liczba Marek: ".$liczba."</h3>";
        $liczba2 = mysqli_num_fields($rezultat);
        echo "<h3>Liczba kolumn: ".$liczba2."</h3>";

        echo '<table border="1">';
        echo "<th class='tytul'>Marka</th>";
        echo "<th class='tytul'>Model</th>";
      while ($wiersz = mysqli_fetch_assoc($rezultat)) {
        echo "<tr>";
          echo "<td>$wiersz[marka]</td>";
          echo "<td>$wiersz[model]</td>";

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
