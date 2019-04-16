<?php
session_start();

if ($_GET['wyloguj'] == 1) {
  session_destroy();
  header('location:./index.php?wylogowany=1');
}else {
  header('location:./index.php');
}




 ?>
