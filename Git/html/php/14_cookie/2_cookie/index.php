<?php

  if (!isset($_COOKIE['wiek']) && empty($_GET['wiek'])) {
    include('header.html');
    include('form.html');
    include('footer.html');
  }elseif (isset($_GET['wiek'])) {
        setcookie('wiek', $_GET['wiek'], time()+60*60*24*12);
        header('location: ./index.php');
      /*Jeśli istnieje zmienna z formularza to utwórz ciasteczko na jeden miesiąc*/
  }else{
    echo "Twój wiek: ",$_COOKIE['wiek'];
  }
    /*
    Wyświetl w formacie:
    Twój wiek:...
    dane pobierz z ciasteczka*/




 ?>
