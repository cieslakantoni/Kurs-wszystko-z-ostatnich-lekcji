<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zaloguj się!</title>
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./css/bootstrap/js/bootstrap.min.js">
    </script>
  </head>
  <body>
    <form method="post" >
      <div>
        <h1 id="witamy">Witamy na serwisie!</h1>
      </div>
      <div id="formularz" class="form-group">
        <input type="text" class="form-control" name="login" placeholder="Login" autocomplete="off" autofocus required><br>
        <input type="password" class="form-control" name="haslo" placeholder="Hasło" required><br>
        <input type="submit" class="btn btn-warning" name="przyciskl" value="Zaloguj" formaction="./skrypty/sprawdz.php">
        <input type="submit" class="btn btn-warning" name="przyciskr" formnovalidate value="Zarejestruj się"><br>
      </div>
    </form>
      <?php
      if (isset($_POST['przyciskl'])) {
        header('location:./skrypty/sprawdz.php');
      }elseif (isset($_POST['przyciskr'])) {
        header('location:./zarejestruj.php');
      }


       ?>
  </body>
</html>
