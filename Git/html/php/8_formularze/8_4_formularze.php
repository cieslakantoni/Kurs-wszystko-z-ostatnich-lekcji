<!--Użytkownik podaje z klawiatury dwie dlugosci do wyboru na polu radio ma pole i obwód domyślnie zaznaczone ma być pole
Dane wyślij z formularza bezpiecznie.
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//github.com/szyper
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 zabezpiecz formularz przed podaniem pustych danych wynik wyświetl w formacie
Pole wynosi: ... cm^2
obwód wynosi: ...cm
Obliczenia maja być w osobnym pliku o nazwie 8_4_1_formularze.php-->

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie 8_4</title>
        <link rel="stylesheet" href="../css/8_3_formularze.css">
  </head>
  <body>
    <h2> Formularz 8_4 </h2>
    <div id='komunikat'></div>
        <form method="post">
          <input type="text" id="dlugosc1" name="dlugosc1" placeholder="podaj dlugosc a" value="<?php
            if (!empty($_POST['dlugosc1'])){ echo $_POST['dlugosc1'];
            }?>"><br>
          <input type="text" id= "dlugosc2" name="dlugosc2" placeholder="podaj dlugosc b" value="<?php
          if(!empty($_POST['dlugosc2'])){ echo $_POST['dlugosc2'];
            }?>"><br><br>
          <input type="radio" name="wzor" value="pole" checked>Pole<br>
          <input type="radio" name="wzor" value="obwod">Obwód<br><br>
          <input type="submit" name="przycisk" value="Oblicz">
        </form>
  <?php
        if (isset($_POST['przycisk']) && !empty($_POST['dlugosc1']) && !empty($_POST['dlugosc2']) && !empty($_POST['wzor'])){
          require_once('./8_4_1_formularze.php');

        }else{
          if(isset($_POST['przycisk'])){
            if (strlen($_POST['dlugosc1']) == 0){
          ?>
          <script>
            let komunikat = document.getElementById('komunikat');
            let dlugosc1 = document.getElementById('dlugosc1');
            dlugosc1.style.borderColor = "red";
            dlugosc1.focus();
            komunikat.innerHTML = 'Wypełnij pole dlugosc a';
          </script>
        <?php }else if (strlen($_POST['dlugosc2']) == 0){?>
          <script>
            let komunikat = document.getElementById('komunikat');
            let dlugosc2 = document.getElementById('dlugosc2');
            dlugosc2.style.borderColor = "red";
            dlugosc2.focus();
            komunikat.innerHTML = 'Wypełnij pole dlugosc b';
          </script>

    <?php
      }
    }
  }


  /*  $pole = $_POST['dlugosc1']*$_POST['dlugosc2'].'<br>';
    $obwod = ($_POST['dlugosc1']*2)+($_POST['dlugosc2']*2).'<br>';
    echo $pole;
    echo $obwod;
*/
  ?>
  </body>
</html>
