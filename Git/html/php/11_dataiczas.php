<?php

######################## FUNKCJA DATE  ################################

  echo 'rok - miesiac - dzien: ' .date("Y-m-d")."<br>"; //rok - miesiac - dzien: 2019-02-17
  echo date("d-m-Y")."<br>"; //17-02-2019
  echo date("J-M-Y")."<br>"; //J-Feb-2019
  echo date("j s, M Y")."<br>"; //17 18, Feb 2019
  echo date("G:i:s")."<br>"; //16:23:58
  echo date("h:i:sa")."<br>"; //16:24:24pm
  echo date("Y-m-d G:i:s")."<br>"; //2019-02-17 16:25:23
  echo date("w")."<br>"; //0


  ######################## FUNKCJA GETDATE  ################################


  $data = getdate();

  $dzien = $data["mday"];
  if ($dzien < 10){
    $dzien = '0'.$dzien;
  }
  $rok = $data["yday"];
  $rok1 = $data["year"];
  $mon = $data["mon"];
  $miesiac = $data["month"];
  $wdaya = $data["wday"];

  switch($wdaya){
    case 0:
      $wdaya = "Niedziela";
      break;
    case 1:
      $wdaya = "Poniedziałek";
      break;
    case 2:
      $wdaya = "Wtorek";
      break;
    case 3:
      $wdaya = "Środa";
      break;
    case 4:
      $wdaya = "Czwartek";
      break;
    case 5:
      $wdaya = "Piątek";
      break;
    case 6:
      $wdaya = "Sobota";
      break;
  }
  echo $dzien."-".$mon."-".$rok1."-".$wdaya."<br><br><br>";
  echo "Dzień miesiaca - ".$dzien."<br>";
  echo "Dzień roku - ".$rok."<br>";
  echo "Rok - ".$rok1."<br>";
  echo "Nr miesiaca - ".$mon."<br>";
  echo "Nazwa miesiaca (ang) - ".$miesiac."<br>";


  echo $wdaya;


/* Wyświetl date w formacie:
  17 luty 2019 | Niedziela
*/
switch($mon){
  case 1:
  $mon = "Styczeń";
    break;
  case 2:
    $mon = "Luty";
    break;
  case 3:
    $mon = "Marzec";
    break;
  case 4:
    $mon = "Kwiecień";
    break;
  case 5:
    $mon = "Maj";
    break;
  case 6:
    $mon = "Czerwiec";
    break;
  case 7:
    $mon = "Lipiec";
    break;
  case 8:
    $mon = "Sierpień";
    break;
  case 9:
    $mon = "Wrzesień";
    break;
  case 10:
    $mon = "Październik";
    break;
  case 11:
    $mon = "Listopad";
    break;
  case 12:
    $mon = "Grudzień";
    break;
}
echo "<br> $dzien $mon $rok1 | $wdaya";

################################ MKTIME ###################################

  $rok1 = 2019;
  $miesiac1 = 2;
  $dzien1 =17;

  $rok2 = 2008;
  $miesiac2 = 9;
  $dzien2 = 20;

  $time1 = mktime(0, 0, 0, $miesiac1, $dzien1, $rok1);
  $time2 = mktime(0, 0, 0, $miesiac2, $dzien2, $rok2);

  $time = abs(ceil(($time1 - $time2)/86400 ));
  echo $time1."<br>";
  echo $time2."<br>";

  echo $time.' dni minęło pomiedzy time1 i time2<hr>';

  ################################ MICROTIME ###################################

  $t1 = microtime(true);
  echo $t1;
    for ($i=0; $i < 2000; $i++) {
      for ($j=0; $j <1000 ; $j++) {

      }
    }
    $t2 = microtime(true);

    $t = round ($t2 - $t1, 4);
    echo "<br>Skrypt wykonywał się: $t sekundy<br>";



 ?>
