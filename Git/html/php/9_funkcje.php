<?php
  function f(){
    echo "Janusz<br>";
  }
  f();

  function wyswietl($x){
    echo "Zmienna \$x wynosisz : $x<br>";
  }
  wyswietl(4);
  $test = 3;
  wyswietl($test);


  function suma($x, $y){
    $wynik = $x + $y;
    return $wynik;
  }

  echo suma(3,6);


 $srednia = suma(10,5)/2;
 echo "<br>Średnia wynosi $srednia<br>";

 function calkowita($x){
   return $x;
 }

 echo calkowita(4.5)."<br>";

 $a = calkowita(5);
 echo gettype($a)."<br>"; //integer
 $b = calkowita(5.5);
 echo gettype($b)."<br>"; //double

function calkowita1($x):int{
  return $x;
}

echo calkowita1(5.5)."<br>"; //5
$c = calkowita1(4);//
echo gettype($c)."<br>";//integer
$c = calkowita1(4.5);//
echo gettype($c)."<br>";//integer


function rzeczywista($x):float{
  return $x;
}

$d = rzeczywista(5);
echo gettype($d)."<br>"; //double
echo $d;//5

 ?>
