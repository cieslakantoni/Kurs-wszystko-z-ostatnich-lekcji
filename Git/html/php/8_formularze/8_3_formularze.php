<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
    <link rel="stylesheet" href="../css/8_3_formularze.css">
  </head>
  <body>
    <h3> Formularz 8_3 </h3>
    <div id="blok" name="blok">
    </div>
    <?php if (isset($_GET['przycisk']) && !empty($_GET['nazwisko']) && !empty($_GET['miasto']) && !empty($_GET['kolor'])){
      $nazwisko = $_GET['nazwisko'];
      $miasto = $_GET['miasto'];
      $kolor = $_GET['kolor'];

      $wyswietl = 'Nazwisko: <span style="color:'.$kolor.'">'.$nazwisko.'</span><br>';
      $wyswietl .= 'Miasto: <span style="color:'.$kolor.'">'.$miasto.'</span><br>';

      switch ($miasto) {
        case 'Poznań':
        case 'Gniezno':
            $wojewodztwo ="wielkopolskie";
            break;
        case 'Legnica';
            $wojewodztwo ="dolnośląskie";
            break;
        default:
            $wojewodztwo ='inne';
            break;
      }
      $wyswietl .= 'Województwo: <span style="color:'.$kolor.'">'.$wojewodztwo.'</span>';
      echo $wyswietl;
    } else {
      echo <<<FORM

      <form method="get">
        <input type="text" name="nazwisko" placeholder="Nazwisko" autofocus><br>
        <input type="text" name="miasto" placeholder="Miasto"><br><br>
        <input type="radio" name="kolor" value="red" checked> Czerwony <br>
        <input type="radio" name="kolor" value="green"> Zielony<br>
        <input type="radio" name="kolor" value="magenta"> Magenta<br><br>
        <input type="submit" name="przycisk" value="Wyślij"><br>
      </form>
FORM;

    }

       ?>


  </body>
</html>
