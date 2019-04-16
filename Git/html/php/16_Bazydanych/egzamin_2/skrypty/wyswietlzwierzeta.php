<?php
  require_once('./skrypty/polaczenie.php');

  if (!$polaczenie->connect_errno) {

    //$sql= "SELECT * FROM zwierzeta";
    $sql = "SELECT u.nazwa, rodzaj, imie, wlasciciel, telefon, nastepna_wizyta, szczepienie, opis FROM zwierzeta as z LEFT OUTER JOIN uslugi AS u ON z.usluga_id=u.id ";

    if ($rezultat = $polaczenie->query($sql)) {
      if ($rezultat->num_rows > 0 ) {
        echo "Ilość rekordów: ",$rezultat->num_rows,"<br>";
        echo "<table>";
        echo <<< NAGLOWEK
        <th>Usluga</th>
        <th>Rodzaj</th>
        <th>Imie</th>
        <th>Wlasiciel</th>
        <th>Telefon</th>
        <th>Nastepna wizyta</th>
        <th>Szczepienie</th>
        <th>Opis</th>

NAGLOWEK;
        while ($wiersz = $rezultat->fetch_assoc()) {
          if ($wiersz['rodzaj'] == 1) {
            $rodzaj ='pies';
          }else if ($wiersz['rodzaj'] == 2){
            $rodzaj = 'kot';
          }

          echo <<< WIERSZ
          <tr>
            <td>$wiersz[nazwa]</td>
            <td>$wiersz[rodzaj]</td>
            <td>$wiersz[imie]</td>
            <td>$wiersz[wlasciciel]</td>
            <td>$wiersz[telefon]</td>
            <td>$wiersz[nastepna_wizyta]</td>
            <td>$wiersz[szczepienie]</td>
            <td>$wiersz[opis]</td>

          </tr>
WIERSZ;
        }
        echo "</table>";
      }else {
        echo "Brak rekordów do wyświetlenia";
      }

    }else {
      echo "Błędne zapytanie";
    }

  }else {
    echo "Błędne połączenie";
  }

 ?>
