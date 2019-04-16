<?php
  if (isset($_GET['usunusluge'])) {
    $usunu = $_GET['usunusluge'];
    require('./polaczenie.php');
      if (!$polaczenie->connect_errno) {
      $sql ="DELETE FROM `uslugi` WHERE `uslugi`.`id` = $usunu";
          if ($rezultat = $polaczenie->query($sql)) {
            if ($polaczenie->affected_rows == 1) {
              header('location: ../weterynarz.php?usunusluga=1');
            }elseif($polaczenie->affected_rows == 0) {
              header('location: ../weterynarz.php?usunusluga=0');
            }
          }else {
            echo "Błędne zapytanie";
          }
      }
      header('location:../weterynarz.php');

  }else{
    header('location:../weterynarz.php');
  }









 ?>
