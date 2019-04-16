    <?php
    if (isset($_POST['przycisk'])) {
      if (!empty($_POST['nazwa']) && !empty($_POST['cena'])) {
          $nazwa = $_POST['nazwa'];
          $cena = $_POST['cena'];

          $polaczenie = @new mysqli('localhost', 'root', '', 'weterynarz');
          $polaczenie ->set_charset('utf8');

            if (!$polaczenie->connect_errno) {
                $sql = 'INSERT INTO `uslugi`(`id`, `nazwa`, `cena`) VALUES (NULL,"'.$nazwa.'" ,'.$cena.')';

                  if ($rezultat = $polaczenie->query($sql)) {
                    if ($polaczenmie->affected_rows) {
                      header('location: ../weterynarz.php?dodanieUslugi=1');
                    }else{
                    header('location: ../weterynarz.php?dodanieUslugi=0');
                  }
                  }else {
                    echo "Błędne zapytanie";
                  }

            }else{
                header('location: ../weterynarz.php');
            }

      }else {
        header('location: ../weterynarz.php?dodajUsluge=');
    }
  }else {
    header('location: ../weterynarz.php');
  }

    echo "<br>";

      ?>
