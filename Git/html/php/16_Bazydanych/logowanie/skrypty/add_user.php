<?php
  if (!$polaczenie->connect_errno) {
    $haslo1 = password_hash($haslo1, PASSWORD_DEFAULT);
    $sql= "INSERT INTO `user`(`login`, `haslo`, `miasto`, `data_urodzenia`) VALUES (\"$loginr\",\"$haslo1\",\"$miasto\",\"$dataurodzenia\")";

    if ($rezultat = $polaczenie->query($sql)) {

    }else {
      echo "Błędne zapytanie";
    }

  }else {
    header('location:../index.php');
  }
 ?>
