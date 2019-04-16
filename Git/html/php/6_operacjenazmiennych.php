<?php
//operatory

  $potegowanie = 2**10;
  echo $potegowanie,'<br>';

  $modulo = 11 % 3;
  echo $modulo,'<br>';


//+, -, *, /

//operatory bitowe
//and &, or |, not ~, xor ^, przesuniecie bitowe w lewo >>, przesuniecie bitowe w prawo <<,

  $dziesiec = 0b1010;
  echo $dziesiec,'<br>';//1010
  $x = $dziesiec >> 1; //101 => 1*2^0 + 1*2^2 = 1 + 4 = 5
  echo $x,'<br>';

  $y = $dziesiec <<1; //10100 => 1*2^2 + 1*2^4 = 4 + 16 = 20
  echo $y,'<br>';

  $z = $dziesiec <<2; //101000 => 1*2^3 + 1*2^5 = 8 + 32 = 40
  echo $z,'<br>';

//operatory logiczne

//and, or, xor, &&, ||, !

/*Sprawdz czy w sklepie kupisz rower*/
$sklep ='otwarty';
$pieniadze = 1800;
$romet = true;

if ($sklep == 'otwarty' && $pieniadze > 900 && $romet){
  echo 'Kupiłeś rower<br><br>';
}else {
   echo "Nie zrobiłeś zakupów";
 }
//------------------------------------------------------------------
 $sklep ='otwarty';
 $pieniadze = 1300;
 $hulaj = true;
 $romet = false;

 if ($sklep == 'otwarty' && $pieniadze > 1200 && ($romet|| $hulaj)){
   if ($romet && $hulaj)
    echo "Kupiles rower i hulajnoge<br>";
   else if($romet)
    echo "Kupiłeś rower<br>";
   else
    echo "Kupiłeś hulajnoge<br>";
  }else{
    echo "Nie zrozbiles zakupów<br>";
  }


####################################################################

  //operatory relacyjne


 // ==, ===, <> , !=, !==, >, <, >=, <=, <=>

    $a = 1;
    $b = 2;
    $c = '1';
    $d = 1;

    $wynik = $a == $c;//1
    $wynik = $a === $c;//false
    $wynik = $a === $d;//1
    $wynik = $a <> $d;//false
    $wynik = $a <> $b;//1
    $wynik = $a != $b;//1
    $wynik = $a !== $d;//false
    $wynik = $a !== $c;//1

    $wynik = $a <=> $b;//-1

    echo '<hr>'.$wynik.'<hr>';



    $a = 21; //jak a jest wieksze to 1
    $b = 2; // jak b jest wieksze to -1
    //jak a jest równe b to jest 0
    $wynik1 = $a <=> $b;
    echo $wynik1.'<hr>';
####################################################################
  $a = 1.0;
  $b = 1;

  if ($a === $b)
    echo 'Równe';
  else
    echo 'Różne<br>';

  echo gettype($a),'<br>'; //double
  echo gettype($b),'<br>'; //integer


//----------------------------------------------------------------

  $x = 2;
  echo $x++;//2
  echo ++$x;//4
  echo $x;//4
  $y = $x++;
  echo $y;//4
  $y = ++$x;
  echo $y;//6
  echo ++$y;//7

  echo "<br>";
//-----------------------------------------------------------------

//operatory rzutowania

//bool, int, float, string, array, object, unset

$tekst1 = '4ssd<br>';
$tekst2 = 'Drugi tekst<br>';
$tekst3 = '7<br>';
$liczba = 15;
$j = -1;
$c = 100;

echo $tekst1, $tekst2, $liczba,"<br>";

$dwa = (int)$tekst1;
echo $dwa,"<br>"; //4
echo gettype($dwa),"<br>"; //integer

$trzy = (int)$tekst3;
echo $trzy,"<br>";
echo gettype($trzy),"<br>"; //integer

$j = (bool)$j;
echo $j,"<br>"; //1 (true)

$c = (unset)$c;
echo $c;//nic nie wyswietli (wartosc pusta)
echo gettype($c),"<br>";// NULL

$tekst1 = (int)$tekst1;
echo $tekst1,"<br>";//4

$tekst1 = (int)$tekst2;
echo $tekst1,"<br>"; //0

$liczba = (float)$liczba;
echo $liczba,"<br>"; // 15
echo gettype($liczba),"<br>";

//string, array, object


##################################################################

//rozmiar typu intiger

echo PHP_INT_SIZE,"<br>"; //4

##################################################################

//kontrola typu zmiennych

  $test = 'szkola';
  $x = 10;
  $a = 20.5;
  $y = true;
  $z = null;
  $w;

  echo gettype($test),"<br>";//string
  echo gettype($x),"<br>";//integer
  echo gettype($a),"<br>";//double
  echo gettype($y),"<br>";//boolean
  echo gettype($z),"<br>";//NULL
  //echo gettype($w),"<br>";//NULL
  echo @gettype($w),"<br>";//NULL '@' - operator ignorowania bledów
  echo '<hr>';
##################################################################

//zmiene super globalne

//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

echo $_SERVER['SERVER_PORT'],'<br>';//80
echo $_SERVER['SERVER_PROTOCOL'],'<br>';//HTTP/1.1
echo $_SERVER['SCRIPT_NAME'],'<br>';///git/html/php/6_operacjenazmiennych.php
echo $_SERVER['DOCUMENT_ROOT'],'<br>';//C:/xampp/htdocs

$lokalPliku = $_SERVER['DOCUMENT_ROOT'];
$lokalPliku .= $_SERVER['SCRIPT_NAME'];
echo $lokalPliku,'<hr>';

####################################################################







?>
