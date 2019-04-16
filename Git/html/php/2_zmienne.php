  <?php
    $a = 1;


  echo $a; //1
  echo "$a"; //1
  echo '$a'; //$a

  $_liczba = 15;
  $liczba2 = 20;
  $_imie_ = "Janusz";
  $_Imie_ = "Julia";
  $Imię = "Tomek"; //dozwolone polskie znaki - nie stosować

  echo "<br>Twoje imie:<br>";
  echo "<br>Twoje imie: $_imie_";
  echo '<br>Twoje imie: $_imie_';

  //typ skalarny
  //typ boolean

  $prawda = true;
  $falsz = false;


  //typ integer
  $calkowita = 40;
  $szestnastkowa = 0xA;
  $osemkowa = 016;
  $binarna = 0b1010;


  //typ float
  $zmienna = 20.5;
  echo "<br>$zmienna<br>";

  // konkatenacja '.' (php)  '+'(js)
  echo $zmienna."<br>";

  //skladnia heredoc
  $imie = "Filip"; //NIGDZIE nie robic spacji w heredoc
  $napis = <<<TEKST
  Mam na imię: $imie<br>
TEKST;
  echo "$napis";

  //skladnia nowdoc
  $nazwisko ='Kowal';
  $tekst = <<<Etykieta
  Moje nazwisko: $nazwisko<br>

Etykieta;
  echo "$tekst";

//heredoc v.2

echo <<<TABELA
Jan<br> <table>
   <tr>
     <th>Imię</th>
     <th>Nazwisko</th>
     <th>Miejscowość</th>
   </tr>
   <tr>
     <td>$_imie_</td>
     <td>$nazwisko</td>
     <td>Poznań</td>
   </tr>
 </table>
TABELA;

//typ zlożony
  //typ array (tablicowy)
  //typ object (obiektowy)

//typ specjalny
  //typ resource
  //typ null

$inna = null;
$inna1 = NULL;

echo "Zmienna o nazwie \$inna i \$inna1 ma wartosc: $inna",$inna1,'*null*, *NULL*'."<hr>";
#################################################################################
//typy danych

$z = 1;

if (is_int($z)){
  echo '$z jest typu całkowitego'."<br>";
}else{
  echo '$z nie jest typu całkowietego'."<br>";
}


if (is_float($z)){
  echo '$z jest typu float'."<br>";
}else{
  echo '$z nie jest typu float'."<br>";
}

if (is_double($z)){
  echo '$z jest typu double'."<br>";
}else{
  echo '$z nie jest typu double'."<br>";
}

if (is_bool($z)){
  echo '$z jest typu bool'."<br>";
}else{
  echo '$z nie jest typu bool'."<br>";
}



 ?>
