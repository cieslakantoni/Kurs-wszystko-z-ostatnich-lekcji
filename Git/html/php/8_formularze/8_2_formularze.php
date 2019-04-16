<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane z formularza</title>
  </head>
  <body>
    <link rel="stylesheet" href="../css/formularze.css">
    <?php
  if (isset($_GET['przycisk']) && strlen($_GET['imie']) >= 2 && strlen($_GET['nazwisko']) >=2 && !empty($_GET['haslo1']) && !empty($_GET['haslo2'])){
       $haslo1 = $_GET['haslo1'];
       $haslo2 = $_GET['haslo2'];
       if ($haslo1 != $haslo2) {
         ?>
         <script>
          setTimeout("location.href ='./8_1_formularze.php';",100);
          alert('Hasła nie są identyczne!');
         </script>
         <?php
       }else{
       $imie = $_GET['imie'];
       $nazwisko = $_GET['nazwisko'];
       //echo $imie, $nazwisko, $haslo, $haslo2;
       $tekst = 'Imię: <span style="color:Green; font-weight:bold">'.$imie.'</span>';
       $tekst .= '<br>Nazwisko: <span style="color:blue">'.$nazwisko.'</span>';
       $tekst .= '<br>Hasło: <span style="color:yellow">'.$haslo1.'</span>';
       echo $tekst;
        }
     }else{
       header('location: ./8_1_formularze.php');

     }


    ?>
  </body>
</html>
