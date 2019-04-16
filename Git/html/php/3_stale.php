<?php

$zmienna="Janusz";
$zmienna="Julia";
echo "$zmienna<br>"; //jedna nadpisuje drugą

define("PI", 3.14159);
echo PI.'<br>';
//PI = 3; stałej nie można


const NARODOWOSC = 'Polska';
echo NARODOWOSC.'<br>';

//zdeprecjonowane od php 7.3, nie bedzie mozna uzywac trzeciego argumentu
define ('Wiek', 18, true);
echo WIEK.'<br>';

/*Utwórz zmienna imie i nazwisko, oraz
dwie stałe: miasto i kraj, przypisz swoje dane
wyświetl na ekranie w formacie
Imię:...
Nazwisko:...
Miasto:... , Kraj:...
Wykorzystaj do wyświetlenia heredoc*/
$imie = "Antoni".'<br>';
$nazwisko ="Cieslak".'<br>';
const MIASTO = 'Poznań';
const KRAJ = 'Polska';

$koniec = <<< ZADANIE
Imię: $imie Nazwisko: $nazwisko
ZADANIE;
echo "$koniec";
echo "Miasto: ",MIASTO,", kraj: ",KRAJ,"";
echo '<br>';

##################################################################

//stałe predefiniowane

  echo PHP_VERSION.'<br>';//7.1.10
  echo gettype(PHP_VERSION).'<br>';

  $ver = PHP_VERSION;
  if($ver > 7.1)
  echo 'Nowa wersja PHP';
  else
  echo 'Stara wersja PHP';

  echo '<br>'.PHP_OS; //WINNT
  echo '<br>'.__LINE__; //52
  echo '<br>'.__FILE__; //C:\xampp\htdocs\Git\html\php\3_stale.php
  echo '<br>'.__DIR__;//C:\xampp\htdocs\Git\html\php

?>
