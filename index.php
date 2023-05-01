<?php

include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Silahturami Online</title>
  </head>
  <body>
    <main>
      <div class="login">
        <h1>Masuk<br />Silahturami Online</h1>
        <form>
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Masukkan Email" />

          <label for="password">Kata Sandi</label>
          <input type="password" name="password" placeholder="Masukkan Kata Sandi" />

          <input class="submit" type="submit" value="Masuk" name="masuk" />
        </form>
        <h6>Warga baru Silahturami Online? <a href="./form-daftar.php">Daftar</a></h6>
      </div>
    </main>
  </body>
</html>
