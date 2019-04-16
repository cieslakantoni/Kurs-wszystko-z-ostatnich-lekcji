<?php
  $text = <<<TEKST
   TEB - Towarzystwo
   Edukacji Bankowej

TEKST;

//nl2br
  echo "Przed wywołaniem funkcji nl2br:<br> $text";
  echo "<br>Po wywołaniem funkcji nl2br:<br>";
  echo nl2br($text);

//zamiana na male litery
  echo strtolower($text),'<br>';
//zamiana na duże litery
  echo strtoupper($text),'<br>';
//zamiana pierwszej litery na dużą
  $tekst = 'jeDEn Dwa trzY';
  echo ucfirst($tekst),'<br>';
//zamiana wszystkich pierwszych liter na duża
  echo ucwords($tekst);

####################################################################

//co '30' znakow daj <br>
$lorem = "<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";

$kolumna = wordwrap($lorem, 30,'<br>');
echo "$kolumna";

//usuwanie białych znaków
$imie = 'Julia';
$imie1 = '  Julia ';

echo strlen($imie)."<br>";
echo strlen($imie1)."<br>";
//usuwanie spacji z lewej strony i wyswietlenie dlugosci slowa
echo strlen(ltrim($imie1))."<br>";
//usuwanie spacji z prawej strony i wyswietlenie dlugosci slowa
echo strlen(rtrim($imie1))."<br>";
//usuwanie spacji z obu stron i wyswietlanie dlugosci slowa
echo strlen(trim($imie1))."<br>";

//przeszukiwanie
$adres = "Poznań, ul. Rynek Jeżycki 1, 60-847 tel. 615 270 665";
$szukaj = strstr($adres, 'tel');
echo $szukaj,'<br>'; //tel. 615 270 665

$szukaj1 = strstr($adres, 'tel', true); // jak damy false to wszysko po 'tel'
echo $szukaj1,'<br>'; //Poznań, ul. Rynek Jeżycki 1, 60-847

$szukaj2 = stristr($adres, 'Tel');
echo $szukaj2,'<br>';

$mail = strstr('poznan@teb.pl<br>', '@');
echo $mail; //@teb.pl

$mail1 = strstr('poznan@teb.pl<br>',64);
echo $mail1; // @teb.pl

####################################################################

$ciag1 ='a';
$ciag2 ='aa';
echo strcmp($ciag1, $ciag2).'<br>'; //-1
echo strcmp('zzz', 'zzz').'<br>'; //0
echo strcmp('zzza', 'zzz').'<br>'; //1
echo strcmp('zzz', 'zzza').'<br>'; //-1

####################################################################

$poz = strpos('abcdefg', 'abc').'<br>';
echo $poz; //0

$poz = strpos('abcabc', 'abc').'<br>';
echo $poz; //0

/*Sprzwdz czy ciąg z zmiennej $tekst2 znajduje się w zmiennej $tekst1
Wyświetl jeden komunikatów o tresci:
'Ciąg $tekst2 jest zawarty w ciągu $tekst1'
'Ciąg $tekst2 nie jest zawarty w ciągu $tekst1'
*/

$tekst1 = 'poznan';
$tekst2 ='ozna';

if (strpos($tekst1, $tekst2) == true) {
  echo "Ciąg $tekst2 jest zwaraty w ciągu $tekst1<br>";
}else {
  echo "Ciąg $tekst2 nie jest zawarty w ciągu $tekst1<br>";
}
###################################################################

//przetwarzanie ciągu znakówarning
  $zamien = str_replace("%imie%", "Janusz", "%imie% to nie %imie%, to styl życia")."<br>";
echo $zamien;

//substr
 $nazwisko = substr('Julia Nowak', 4);
 echo $nazwisko.'<br>';
 $nazwisko1 = substr('Julia Nowak', 4, 5);
 echo $nazwisko1.'<br>';

//przetwarzanie ciągu znaków (zamiana polskich znaków)

  $login = ('bączek');
  $cenzura = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
  $zamiana = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

  $poprawnyLogin = str_replace($cenzura, $zamiana, $login);
  echo 'Poprawny login: ',$poprawnyLogin,'<br>';
/* Użytkownik podaje dane w forumularzu z klawiatury,
   zamien w zdaniu słowa: 'czarny', 'kurczak' na ciąg: ' *** '
*/

  echo <<<FORM
  <hr>
  <form>
    <input type="text" name="dane">
    <input type="submit" name="przycisk" value="Zatwierdz">
  </form>
FORM;
  $niedozwolone = array('czarny', 'kurczak');
  $zamiana = ' *** ';
  if (isset($_GET['przycisk'])) {
    $dane = $_GET['dane'];
    $poprawne = str_replace($niedozwolone, $zamiana, $dane);

    echo 'Dane przed zamiana: ',$dane;
    echo ' Dane po zamianie: ',$poprawne;
  }


?>
