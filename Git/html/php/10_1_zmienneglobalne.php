<!-- Napisz funkcję która bedzie przyjmowała dwa argumenty, liczbowe z formularza.
Na ekranie pod formularzem bedzie zwrócony mniejszy z nich np. 'Najmniejsza wartość: ...'
Podnieś pierwszy argument do potęgi drugiego argumentu i wyswietl w formacie:
'4 <index górny>^7 wynosi: ...'
-->
<!DOCTYPE html>
<html lang="pls" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie 10_1</title>
  </head>
  <body>

    <form method="post">
      <input type="text" name="x" placeholder="Podaj x"><br>
      <input type="text" name="y" placeholder="Podaj y"><br><br>
      <input type="submit" name="przycisk" value="Oblicz">
    </form>
    <?php
    require_once('./10_2_funkcje.php');
    if (isset($_POST['przycisk'])  ) {
      if (!empty($_POST['x']) && !empty($_POST['y'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $min = minimum($x, $y);
        $potega = potega($x, $y);
        $wyswietlp = $x."<sup>".$y."</sup>";
        $wyswietl = "Najmniejsza wartość: ".$min;
        echo $wyswietl."<br>";
        echo $wyswietlp." wynosi ".$potega;
      }else{
        echo " wypełnij wszystkie pola";
      }
    }
    /*  $x = $_POST['x'];
      $y = $_POST['y'];
    if ($x < $y) {
      echo $x."<br>";}
    else {
      echo $y."<br>";
    }
    $potega = $x ** $y;

    echo $x."<sup>".$y = $potega;
    }*/
    ?>





  </body>
</html>
