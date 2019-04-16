<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>4_1_skrypty</title>
  </head>
  <body>
    Require<br>
    Treść pliku 4_2:
    <?php
    //require
    require ('./4_skryptyzewnetrzne/4_2_skrypt_zewnetrzny.php');
    echo "Zawartosc pliku 4_2: ";
    require ('./4_skryptyzewnetrzne/4_3_skrypt_zewnetrzny.php');
    echo "Ponowne wyswietlenie pliku 4_3: ";
    require_once ('./4_skryptyzewnetrzne/4_3_skrypt_zewnetrzny.php');

    //include
    echo '<br> Include <br>Zawartosc pliku 4_2: <br>';
    include ('./4_skryptyzewnetrzne/4_2_skrypt_zewnetrzny.php');
    echo '<br>Ponowne wyswietlanie zawartosci pliku 4_2: <br>';
    include_once ('./4_skryptyzewnetrzne/4_2_skrypt_zewnetrzny.php');
     ?>
     <hr>Dalsza tresc strony www

</body>
</html>
