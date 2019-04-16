<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zarejestruj się!</title>
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./css/bootstrap/js/bootstrap.min.js">
    </script>
  </head>
  <body>
    <form method="post" >
      <div id="formularz" class="form-group">
        <div id="info" class="alert-primary">
          Rejestracja użytkownika
        </div>
        <input type="text" class="form-control" name="loginr" placeholder="Login" autocomplete="off" autofocus required><br>
        <input type="password" class="form-control" name="haslo1" placeholder="Hasło" required><br>
        <input type="password" class="form-control" name="haslo2" placeholder="Potwierdz Hasło" required><br>
        <input type="text" class="form-control" name="miasto" placeholder="Miasto" ><br>
        <input type="date" class="form-control" name="data_urodzenia" placeholder="Data urodzenia" ><br>
        <input type="submit" class="btn btn-warning" name="cofnij" formnovalidate  value="Cofnij">
        <input type="submit" class="btn btn-warning" name="przyciskr" formnovalidate  value="Zarejestruj się"><br>
      </div>

<?php
    if(isset($_POST['cofnij'])){
      header('location:./index.php');
    }elseif (isset($_POST['przyciskr'])){
      if (!empty($_POST['loginr']) && !empty($_POST['haslo1']) && !empty($_POST['haslo2']) && !empty($_POST['miasto']) && !empty($_POST['data_urodzenia'])) {
          if ($_POST['haslo1'] != $_POST['haslo2']) {
            ?>
            <script>
              let info = document.getElementById('info');
              info.innerHTML = 'Hasła są różne!';
              info.className = 'alert alert-danger';
            </script>
            <?php
          }else{
            $loginr = $_POST['loginr'];
            $haslo1 = $_POST['haslo1'];
            $miasto = $_POST['miasto'];
            $dataurodzenia = $_POST['data_urodzenia'];

            require_once('./skrypty/polaczenie.php');
            require_once('./skrypty/add_user.php');
            header('location:./index.php?udany=');
          }


      }else {
            //header('location:./index.php?udany=');;
            ?>
            <script>
            let info = document.getElementById('info');
            info.innerHTML = 'Wypełnij wszystkie pola!';
            info.className = 'alert alert-danger';
            </script>
            <?php
          }
        }else {
        }




?>


  </form>
</body>
</html>
