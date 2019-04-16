<?php
//funckja wyswietlajaca dane z tablicy
    function wyswietl($t, $ilosc){
      echo "<br>";
        echo "Ilosc ulubionych kolorów: $ilosc";

        foreach ($t as $klucz => $x) {
          $ilosc = $klucz + 1;
          echo "<br>Kolor $ilosc: ".$x;
        }

      }
?>
