<?php
  //instrukcja if

  $x =3;
  $y =40;

    if ($x < $y) {
      echo "$x jest mniejsze od $y<br>";
    }

    if ($x < $y):
      echo "$x jest mniejsze od $y<br>";
      endif;

  //instrukcja if...else

  if($x < $y){
    echo "$x jest mniejsza od $y<br>";
  }else {
    echo "$x nie jest mniejsza od $y<br>";
  }


  if($x < $y):
    echo "$x jest mniejsza od $y<br>";
  else:
    echo "$x nie jest mniejsza od $y<br>";
  endif;


  //instrukcja if...else...if

  if($x < $y){
    echo "$x jest mniejsza od $y<br>";
  }elseif ($x == $y) {
    echo "$x jest równa $y<br>";
  }else{
    echo "$x jest większa od $y";
  }

  if($x < $y):
    echo "$x jest mniejsza od $y<br>";
  elseif ($x == $y):
    echo "$x jest równa $y<br>";
  else:
    echo "$x jest większa od $y";
  endif;

  //instrukcja switch
  $a = 5;

  switch ($a){
    case 0:
      echo "\$a wynosi 0<br>";
      break;
    case 5:
      echo "\$a wynosi 5<br>";
      break;
    case 10:
      echo "\$a wynosi 10<br>";
      break;
  }

  switch ($a):
    case 0:
      echo "\$a wynosi 0<br>";
      break;
    case 5:
      echo "\$a wynosi 5<br>";
      break;
    case 10:
      echo "\$a wynosi 10<br>";
      break;
    endswitch;

  //pętle

  for ($i = 1; $i < 10; $i++) {
    echo "$i";
  }

  for ($i = 1; $i < 10; $i++) :
    echo "$i ";
  endfor;


  echo "<br>";


  //pętla foreach

  $tab = array(1, 2, 3 ,4 ,5);
  foreach ($tab as $klucz => $wartosc) {
    echo "$tab[$klucz]<br>";
  }

  //skladania alternatywna pętli foreach

  foreach ($tab as $klucz => $wartosc):
    echo "$tab[$klucz]<br>";
  endforeach;
  echo "<br><br>";

  //pętla while

  $i = 1;

  while ($i <= 3){
    echo "$i";
    $i++;
  }

  //skladnia alternatywna pętli while

  while ($i <= 3):
    echo "$i";
    $i++;
  endwhile;

  echo "<br>";

  ###############################################################################


  //break

  for ($i=1; ; $i++){
    echo "Zmienna \$i wynosi: $i<br>";
    if ($i == 5){
      break;
    }
  }

  //skladania alternatywna break

  for ($i=1; ; $i++):
    echo "Zmienna \$i wynosi: $i<br>";
    if ($i == 5):
      break;
    endif;
  endfor;


  //continue

  for ($i=0; $i <=10 ; $i++){
    if ($i % 2 == 1){
      continue;
    }
    echo "$i";
  }

  echo "<br>";

  //skladnia alternatywna continue

  for ($i=0; $i <=10 ; $i++):
    if ($i % 2 == 1):
      continue;
    endif;
    echo "$i";
  endfor;


 ?>
