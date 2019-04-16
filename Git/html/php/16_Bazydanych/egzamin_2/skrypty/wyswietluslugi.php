<?php
  require_once('./skrypty/polaczenie.php');

  if (!$polaczenie->connect_errno) {

    //$sql= "SELECT * FROM zwierzeta";
    $sql = "SELECT * FROM uslugi ";

    if ($rezultat = $polaczenie->query($sql)) {
      if ($rezultat->num_rows > 0 ) {
        echo "Ilość rekordów: ",$rezultat->num_rows,"<br>";
        echo "<table>";
        echo <<< NAGLOWEK
        <th>Usluga</th>
        <th>Cena</th>
        <th>Usuń</th>

NAGLOWEK;
        while ($wiersz = $rezultat->fetch_assoc()) {
          $id = $wiersz['id'];
          echo <<< WIERSZ
          <tr>
            <td>$wiersz[nazwa]</td>
            <td>$wiersz[cena] zł</td>
            <td class="red"><a class="red" href="./skrypty/usunusluge.php?usunusluge=$id">Usuń</a></td>

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
