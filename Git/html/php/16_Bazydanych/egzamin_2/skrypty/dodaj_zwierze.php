<?php
require_once('./polaczenie.php');

  if(!empty($usluga = $_POST['uslugi']) && !empty($_POST['rodzaj']) && !empty($imie = $_POST['imie'])&& !empty($wlasciciel= $_POST['wlasciciel']) && !empty($telefon = $_POST['telefon']) && !empty($wizyta = $_POST['wizyta']) &&
  !empty($szczepienie = $_POST['szczepienie']) && !empty($opis = $_POST['opis'])){
    $usluga = $_POST['uslugi'];
    $rodzaj = $_POST['rodzaj'];
    $imie = $_POST['imie'];
    $wlasciciel= $_POST['wlasciciel'];
    $telefon = $_POST['telefon'];
    $wizyta = $_POST['wizyta'];
    $szczepienie = $_POST['szczepienie'];
    $opis = $_POST['opis'];

    $sql="INSERT INTO `zwierzeta` (`usluga_id`, `rodzaj`, `imie`, `wlasciciel`, `telefon`, `nastepna_wizyta`, `szczepienie`, `opis`) VALUES ('1', $rodzaj, \"$imie\", \"$wlasciciel\", \"$telefon\", \"$wizyta\", $szczepienie, \"$opis\")";

    if ($rezultat = $polaczenie->query($sql)) {
      header('location: ../weterynarz.php');
      if (isset($_SESSION['blad'])) {
        unset($_SESSION['blad']);
      }
    }else {
      echo "Błędne zapytanie!";
    }
  }else {
    $_SESSION['blad'] = "Uzupelnij wszystkie dane!";
    if (!empty($_POST['imie'])) {
      $_SESSION['dane']['imie'] = $_POST['imie'];
    }elseif (!empty($_POST['nazwisko'])) {
      // code...
    }
    header('location: ../weterynarz.php?dodaj_zwierze');
  }
 ?>
