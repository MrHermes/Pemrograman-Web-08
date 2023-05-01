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
        <form action="proses-login.php" method="POST">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Masukkan Email" />

          <label for="password">Kata Sandi</label>
          <input type="password" name="password" placeholder="Masukkan Kata Sandi" />

          <input class="submit" type="submit" value="Masuk" name="masuk" />
          <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                      echo "<script type='text/javascript'>alert('Berhasail daftar');</script>";
                    } else {
                      echo "<script type='text/javascript'>alert('Email atau password salah');</script>";
                    }
                ?>
            </p>
         <?php endif; ?>
        </form>
        <h6>Warga baru Silahturami Online? <a href="./form-daftar.php">Daftar</a></h6>
      </div>
    </main>
  </body>
</html>
