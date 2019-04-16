<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="./Weterynarz.css">
  </head>
  <body>

      <div id="banner">
        <h1>Gabinet weterynaryjny</h1>
      </div>
      <div id="lewy">
        <h2>Psy</h2>
        <!-- Script nr 1 -->
        <?php
        $polaczenie = new mysqli('localhost', 'root', '', 'weterynarz');
        $polaczenie->set_charset('utf8'); //polskie znaki
        if (!$polaczenie->connect_errno) {
          $sql = "SELECT z.id, z.imie, z.wlasciciel FROM zwierzeta as z WHERE rodzaj=1";
            if ($rezultat = $polaczenie->query($sql)) {
              while ($wiersz = $rezultat->fetch_assoc()) {
                echo <<< TABELA
                $wiersz[id]
                $wiersz[imie]
                $wiersz[wlasciciel] <br>
TABELA;
              }

            }else {
                echo "Błędne zapytanie";
            }


        }else {
          echo 'Bledne polaczanie z baza danych ';
          echo $polaczenie->connect_errno;
          //localhost: 2002
          //haslo: 1045
          //użytkownik: 1044
          //baza: 1049
        }

         ?>
        <h2>Koty</h2>
        <!-- Script nr 2 -->
        <?php

        if (!$polaczenie->connect_errno) {
          $sql = "SELECT z.id, z.imie, z.wlasciciel FROM zwierzeta as z WHERE rodzaj=2";
            if ($rezultat = $polaczenie->query($sql)) {
              while ($wiersz = $rezultat->fetch_assoc()) {
                echo <<< TABELA
                $wiersz[id]
                $wiersz[imie]
                $wiersz[wlasciciel]<br>
TABELA;
              }

            }else {
                echo "Błędne zapytanie";
            }


        }else {
          echo 'Bledne polaczanie z baza danych ';
          echo $polaczenie->connect_errno;
          //localhost: 2002
          //haslo: 1045
          //użytkownik: 1044
          //baza: 1049
        }
        ?>
        <br>
        <a href="./weterynarz.php?dodajUsluge=">Dodaj usługę</a>
        <?php
        //dodanie usługi do bazy
        if (isset($_GET['dodajUsluge'])){
          ?>
          <form action="./skrypty/dodajUsluge.php" method="post">
            <input type="text" name="nazwa" placeholder="Imię pacjenta"><br>
            <input type="text" name="cena"  placeholder="Cena"><br>
            <input type="submit" name="przycisk"  value="Dodaj usługę">
          </form>
          <?php
        }
        if (isset($_GET['dodanieUslugi'])) {
          if ($_GET['dodanieUslugi'] == 0) {
            echo "<br>Prawidłowo dodano nową usłguę do baz danych";
          }else {
            echo "<br>Dodanie nowej usługi nie powiodlo się";
          }
        }
         ?>

      </div>
      <div id="srodkowy">
        <h2>Szczegółowa informacja o zwierzętach</h2>
        <!-- Script nr 3 -->
        <?php



        if (!$polaczenie->connect_errno) {
          $sql = "SELECT z.imie, z.telefon, z.szczepienie, z.opis FROM zwierzeta as z;";
            if ($rezultat = $polaczenie->query($sql)) {
              while ($wiersz = $rezultat->fetch_assoc()) {
                echo <<< TABELA
                <p>Pacjent: $wiersz[imie] <br>
                Telefon własciciela: $wiersz[telefon], ostatnie szczepienie: $wiersz[szczepienie], informacje: $wiersz[opis]
                </p>
                <hr>
TABELA;
              }

            }else {
                echo "Błędne zapytanie";
            }


        }else {
          echo 'Bledne polaczanie z baza danych ';
          echo $polaczenie->connect_errno;
          //localhost: 2002
          //haslo: 1045
          //użytkownik: 1044
          //baza: 1049
        }


         ?>
      </div>
      <div id="prawy">

        <h2>Weterynarz</h2>
        <a href="./img/logo.jpg"><img src="./img/logo-mini.jpg"></a>
        <p>Krzysztof Nowakowski,<br> lekarz weterynarii</p>
        <br>
        <br>
        <h2>Godziny przyjeć</h2>
        <table>
          <tr>
            <td>Poniedziałek</td>
            <td>15:00-19:00</td>
          </tr>
          <tr>
            <td>Wtorek</td>
            <td>15:00-19:00</td>
          </tr>
        </table>
      </div>



  </body>
</html>
