<?php

######################### ZMIENNE GLOBALNE ####################################

$l = 10; // zmienna globalna

//echo $l;

function zmien(){
  //echo "Wartość \$l w funkcji wynosi : $l";//bład
  //echo "Wartość \$l w funkcji wynosi : $GLOBALS[l]";// Wartość $l w funkcji wynosi 10
  //echo "Wartość \$l w funkcji wynosi : {$GLOBALS[l]}";// Wartość $l w funkcji wynosi 10
  echo "Wartość \$l w funkcji wynosi: ".$GLOBALS['l'];// Wartość $l w funkcji wynosi 10
}

zmien();

echo "<br>Wartość zmiennej poza funkcją: $l<br>";

######################### ZMIENNE LOKALNE #####################################

 function f(){
   $liczba = 10;
   echo "Zmienna \$liczba wynosi węwnątrz funckji: $liczba<br>";
 }

f();
  //echo "<br> Zmienna \$liczba wynosi poza funkcją: $liczba"; //błąd


  ######################### ZMIENNE STATYCZNE #################################


function suma(){
  $x = 4;
  $x += 10;
  echo "Zmienna \$x wynosi: $x<br>";

}

suma();//14



function suma1(){
  static $y = 4;
  $y += 10; // $y = + 10
  echo "Zmienna \$y wynosi: $y<br>";

}


suma1();//14
suma1();//24
suma1();//34
suma1();//44
suma1();//54


######################### PRZEKAZYWANIE ARGUMENTOW ############################

//przekazywanie argumentow przez Wartość

function addThree($x){
  $x = $x + 3;
}

  $liczba = 5;
  echo "\$liczba przed wywolaniem funkcji wynosi: $liczba<br>";//5

  addThree($liczba);
  echo "\$liczba po wywolaniu funkcji wynosi: $liczba<br>";//5


//przekazywanie argumentow przez referencje &

function addFour(&$x){
    $x = $x + 4;
}

  $liczba = 5;
  echo "\$liczba przed wywolaniem funkcji wynosi: $liczba<br>";//5


  addFour($liczba);

  echo "\$liczba po wywolaniu funkcji wynosi: $liczba<br>";//9



  ######################### ARGUMENTY DOMYŚLNE ############################

  function dodaj($x, $y = 4){
    return $x + $y;
  }

  $a = 3;

  echo dodaj(2, 4)."<br>"; // 6
  echo dodaj($a, $a)."<br>";//6
  echo dodaj ($a)."<br>";//

  ######################### ARGUMENTY I TYPY DANYCH ############################

function mnozenie(int $x, int $y = 5){
  return $x * $y;
}
echo mnozenie(1)."<br>";//5
echo mnozenie(3, 5)."<br>";//15
echo mnozenie(3.5, 2)."<br>";//6








  ?>
