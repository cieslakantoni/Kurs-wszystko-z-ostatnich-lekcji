<?php
  //tablice indexowane numerycznie

   $kolory = array("biały", "zielony", "czerwony");
   echo "Początkowa zawartość tablicy: <br>";

   for ($i=0; $i < count($kolory) ; $i++) {
     $elem = $i + 1;
     echo "Element $elem: $kolory[$i]<br>";
   }

 /* Napisz funckje która wyświetli zawartość tablicy
 Do pierwszego elementu tablicu kolory przypisz, nowy kolor "Aqua",
 drugiego "Magenta", trzeciego "Cyan". Wyświetl kolory w formacie:
 1 kolor:  Aqua
 2 kolor: ...
 3 kolor: ...
 $kolory[0] = "aqua";

 */

//moj sposob
 $liczby = array ("zero", "jeden", "dwa");
  echo "Tablica:<br>";

  for ($i=0; $i < count($liczby) ; $i++) {
    $nr = $i + 1;
    $liczby[0]= "Aqua";
    $liczby[1]= "Magenta";
    $liczby[2]= "Cyan";
    echo "kolory $nr: $liczby[$i]<br>";

  }

//sposob profesora
echo "<br>";
function  tab($liczby){
  $liczby[0]= "Aqua";
  $liczby[1]= "Magenta";
  $liczby[2]= "Cyan";
  for ($i=0; $i < count($liczby); $i++){
    $elem = $i +1;
    echo "$elem kolor: $liczby[$i]<br>";
  }
}
tab($liczby);

echo "<br>";

  //tablice asocjacyne

  $dane = array(
      "imie" => "Janusz",
      "nazwisko" => "Kowalski",
      "wiek" => 50
  );


  echo "Zawartość tablicy: <br>";
  echo<<<TABLICA
  Imię: {$dane['imie']}<br>
  Nazwisko: $dane[nazwisko]<br>
  Wiek: $dane[wiek]<br>
TABLICA;



echo "<br>";

foreach ($dane as $klucz => $value ) {
    echo "$klucz: $value<br>";
}




//tablice wielowymiarowe

  $uczen = array(
    array("Julia ", "Nowak ", 30, " Poznań"),
    array("Anna ", "Kowal ", 20, " Gniezno")
  );


for ($i=0; $i < count($uczen); $i++){
  $nr = $i+1;
  echo "Uczeń $nr: ";

  for ($j=0; $j < count($uczen[$i]); $j++){
    echo "{$uczen[$i][$j]}";

  }
  echo "<br>";
}
  echo "<br><br>";

//sposob 1
  $nr = 1;
  foreach ($uczen as $key => $value) {
    echo "Uczeń $nr: ";
    foreach ($value as $key => $wynik) {
    echo $wynik;
    }
    $nr++;
    echo "<br>";
  }

################################################################################

  $cyfry = array(
    array(1, 2, 3, 4),
    array(5, 6, 7),
    array(8),
    array(9, 10)

  );

  foreach ($cyfry as $x) {
    echo "<br>";
    foreach ($x as $y) {
      echo "$y ";
    };
  }
  echo "<br>";
  echo "<br>";

  //sortowanie tablic

    $tab = array(10, 1, 5, 75, -4, 100); // sortwanie JS -4 1 10 100 5 75
      function t($tab){
        foreach ($tab as $x) {
          echo "$x ";   //sortowanie 10 1 5 75 -4 100
        }
      }
      t($tab);

      echo "<br>";
      echo "<br>";

    //sortowanie rosnąco
    sort($tab); // -4 1 5 10 75 100
    t($tab);

    echo "<br>";
    echo "<br>";

    //sortowanie malejąco
    rsort($tab); // 100 75 10 5 1 -4
    t($tab);

    echo "<br>";
    echo "<br>";
    $tab2 = array('karol
    ', 'anna', 'zenon', 'Julia', 'paweł');

    //zamiana na małe litery

    sort($tab2); //sortowanie
    t($tab2);

    echo "<br>";
    echo "<br>";

    function zamianaNaMale(&$tab2){
    foreach ($tab2 as $key => $value) {
      $z = strtolower($value);
      $tab2[$key] = $z;
      echo "$z "; // zmienione na male
     }
    }
    zamianaNaMale($tab2);
    sort($tab2);
    t($tab2);

    echo "<br>";
    echo "<br>";
    //zmiana na duże litery

    foreach ($tab2 as $key => $value) {
      $z = strtoupper($value);
      $tab2[$key] = $z;
      echo "$z "; //zmiana na duże
    }

    echo "<br>";
    echo "<br>";
    sort($tab2); //sortowanie drugi raz
    t($tab2);

    echo "<br>";
    echo "<br>";
    //sortowanie tablicy asosiacyjnej

      $tabAsoc = array(
        'imie' => 'Andrzej',
        'nazwisko' => 'Długopis',
        'wiek' => 40,
        'pseudonim' => "2endru"
      );

        function wyswietlAsoc($tabAsoc){
          foreach ($tabAsoc as $x) {
            echo "$x ";
          }
          echo "<br>";
          echo "<br>";
        }

        wyswietlAsoc($tabAsoc);


    //sortowanie rosnące według zawartości
    asort($tabAsoc);
    wyswietlAsoc($tabAsoc);

    //sortowanie malejące według zawartości
    arsort($tabAsoc);
    wyswietlAsoc($tabAsoc);

    echo gettype($tabAsoc['pseudonim']);
    echo gettype($tabAsoc['wiek']);
    echo gettype($tabAsoc['imie']);
    echo gettype($tabAsoc['nazwisko']);
    //sortowanie według klucza (rosnąco) - ksort
    ksort($tabAsoc);
    wyswietlAsoc($tabAsoc);

    //sortowanie według klucza (malejąco) - krsort
    krsort($tabAsoc);
    wyswietlAsoc($tabAsoc);

    //wyświetlanie danych z tablicy
    var_dump($tabAsoc);
    echo "<br>";
    echo "<br>";

    print_r($tabAsoc);

    echo "<pre>";
    print_r($tabAsoc);
    echo "</pre>";


 ?>
