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
      <div class="form-daftar">
        <h1>Daftar<br />Silahturami Online</h1>
        <form action="proses-pendaftaran.php" method="POST">
          <label for="email">Email</label>
          <input type="text" placeholder="Masukkan Email" name="email" />
          
          <label for="password">Password</label>
          <input type="password" placeholder="Masukkan Kata Sandi" name="password" />
                    
          <label for="name">Nama Lengkap</label>
          <input type="text" placeholder="Masukkan Nama Lengkap" name="name" required/>

          <label for="no_telp">No. Handphone</label>
          <input type="text" placeholder="Masukkan Nomor Handphone" name="no_telp" required/>

          <label for="address">Alamat Rumah</label>
          <textarea name="address" placeholder="Masukkan Alamat Rumah"></textarea>
          
          <input class="submit" type="submit" value="Daftar" name="daftar" />
        </form>
        <h6>Sudah menjadi warga Silahturami Online? <a href="./index.php">Masuk</a></h6>
      </div>
    </main>
  </body>
</html>
