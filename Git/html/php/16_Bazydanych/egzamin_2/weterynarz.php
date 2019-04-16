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

        require_once('./skrypty/polaczenie.php');


        if (!$polaczenie->connect_errno) {
          $sql = "SELECT z.id, z.imie, z.wlasciciel FROM zwierzeta as z WHERE rodzaj=1";
            if ($rezultat = $polaczenie->query($sql)) {
              while ($wiersz = $rezultat->fetch_assoc()) {
                echo <<< PSY
                $wiersz[id]
                $wiersz[imie]
                $wiersz[wlasciciel] <br>
PSY;
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
                echo <<< KOTY
                $wiersz[id]
                $wiersz[imie]
                $wiersz[wlasciciel]<br>
KOTY;
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
        <hr>
        <a href="./weterynarz.php?wyswietlzwierzeta=">Wyświetl zwierzęta</a>
        <hr>
        <a href="./weterynarz.php?wyswietluslugi=">Wyświetl uslugi</a>
        <hr>
        <a href="./weterynarz.php?dodajUsluge=">Dodaj usługę</a>
        <hr>
        <a href="./weterynarz.php?dodaj_zwierze=">Dodaj zwierzę</a>

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

        if (isset($_GET['usunusluge'])) {
          if ($_GET['usunusluge'] == 0) {
            echo "<br>Prawidłowo usunięto usłguę z baz danych";
          }else {
            echo "<br>Usunięto usługi nie powiodlo się";
          }
        }
         ?>

      </div>
      <div id="srodkowy">
        <?php
        echo "<form method='post' action='./skrypty/dodaj_zwierze.php'>";
        if (isset($_GET['dodaj_zwierze'])){
          echo "<h2>Dodaj pupila</h2> ";
          if (isset($_SESSION['blad'])) {
            echo $_SESSION['blad'],'<br>';
            unset($_SESSION['blad']);
          }
          $sql="SELECT nazwa, id FROM `uslugi`";
          if ($rezultat = $polaczenie->query($sql)) {
            echo "<select name=\"uslugi\">";
            while($wiersz = $rezultat->fetch_assoc()){
              $id = $wiersz['id'];
              echo "<option value='$id'>$wiersz[nazwa]</option>";
            }
            echo "</select><br>";
            $polaczenie->close();
          }else {
              echo "Błędne zapytanie do bazy danych";
            }
//rodzje 1- pies, 2 - kot
            echo <<< rodzaj
            <select name="rodzaj">
              <option value="1">pies</option>
              <option value="2">kot</option>
            </select>

            <br>
rodzaj;
// 2, 3 ,4 - imie, wlasciciel, telefon

            $a=1;
            while ($a <= 3):
              switch ($a) {
                case '1':
                $nazwa = 'imie';
                if (!empty($_SESSION['dane']['imie'])) {
                  $imie = $_SESSION['dane']['imie'];
                  unset($_SESSION['dane']['imie']);
                }else {
                  $value = '';
                }
                  break;
                case '2':
                $nazwa = 'wlasciciel';
                if (!empty($_SESSION['dane']['wlasciciel'])) {
                  $value= $_SESSION['dane']['wlasciciel'];
                  unset($_SESSION['dane']['wlasciciel']);
                }else {
                  $value = '';
                }
                  break;
                case '3':
                $nazwa = 'telefon';
                if (!empty($_SESSION['dane']['telefon'])) {
                  $value= $_SESSION['dane']['telefon'];
                  unset($_SESSION['dane']['telefon']);
                }else {
                  $value = '';
                }
                break;
              }
            echo "<input type='text' name=\"$nazwa\" placeholder=\"$nazwa\" value=\"$value\"><br>";
            $a++;
          endwhile;
            echo "<input type='date' name='wizyta'><br>";
            echo "<input type='month' name='szczepienie'><br>";
            echo "<textarea name='opis' rows='8' cols='80'></textarea><br>";
            echo "<input type='submit' name='przycisk' value='Utwórz'><br>";
            echo "</form>";

        }else {
          if (isset($_GET['usunietoz'])) {
            echo "Prawidłowo usunięto Pupila z bazy";
          }
          ?>

        <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
        <!-- Script nr 3 -->
        <?php

        $sql = "SELECT 'imie', 'telefon', 'szczepienie', 'opis' FROM zwierzeta";

        if (isset($_GET['wyswietlzwierzeta'])) {
            //wyswietlenie zwierzat w tabeli
            require('./skrypty/wyswietlzwierzeta.php');



        }elseif (isset($_GET['wyswietluslugi'])) {
          //wyswietlenie uslug
          require_once('./skrypty/wyswietluslugi.php');
        }

        else {
          $sql = "SELECT z.id, z.imie, z.telefon, z.szczepienie, z.opis FROM zwierzeta as z;";
                      if ($rezultat = $polaczenie->query($sql)) {
                        while ($wiersz = $rezultat->fetch_assoc()) {
                          $id = $wiersz['id'];
                          echo <<< PACJENT
                          <p>Pacjent: $wiersz[imie] <br>
                          Telefon własciciela: $wiersz[telefon], ostatnie szczepienie: $wiersz[szczepienie], informacje: $wiersz[opis]
                          </p> <a href="./skrypty/usunzwierze.php?usunzwierze=$id" class="red">Usuń</a>
                          <hr>
PACJENT;
                        }

                  }
        }

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
