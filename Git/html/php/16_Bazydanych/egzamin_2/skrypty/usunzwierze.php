<?php
  if (isset($_GET['usunzwierze'])) {
    $usunz = $_GET['usunzwierze'];
    echo $usunz;
    require_once('./polaczenie.php');

      if (!$polaczenie->connect_errno) {
        $sql ="DELETE FROM `zwierzeta` WHERE `zwierzeta`.`id` = $usunz";
          if ($rezultat = $polaczenie->query($sql)) {
            if ($polaczenie->affected_rows > 0) {
              header('location: ../weterynarz.php?=usunietoz=1');
              exit();
            }
          }else {
            echo "Błędne zapytanie";
          }
      }
  }
    header('location:../weterynarz.php');

 ?>
