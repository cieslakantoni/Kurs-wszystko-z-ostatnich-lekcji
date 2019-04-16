<?php
session_start();

if ($_GET['wyloguj'] == 1) {
  session_destroy();
  header('location:./index.php?wyloguj=1');
}




 ?>
