
    <?php
    if (isset($_POST['przycisk']) && !empty($_POST['dlugosc1']) && !empty($_POST['dlugosc2']) && !empty($_POST['wzor'])){
      $dlugosc1 = $_POST['dlugosc1'];
      $dlugosc2 = $_POST['dlugosc2'];
      $wzor = $_POST['wzor'];
      //echo $dlugosc1,'<br>', $dlugosc2,"<br>", $wzor,"<br>";
      switch ($wzor) {
        case 'pole':
          $wynik = 'Pole wynosi : ';
          $wynik .= $dlugosc1 * $dlugosc2;
          $wynik .= 'cm<sup>2</sup>';
          break;
        case 'obwod':
          $wynik = 'Obwód wynosi : ';
          $wynik .= 2*$dlugosc1 + 2*$dlugosc2;
          $wynik .= 'cm';
          break;
      }

      ?>
      <script>
        let komunikat = document.getElementById('komunikat');
        komunikat.innerHTML = "<?php echo $wynik;?>"
      </script>


      <?php
    }else{
      header('location: ./8_4_formularze.php');
    }

     ?>
