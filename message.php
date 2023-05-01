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
      <div class="message">
        <h1>Kirim<br />Silahturami Online</h1>
        <form action="proses-kirim-pesan.php" method="POST">
          <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>"/>
          <label for="pesan">Pesan</label>
          <textarea name="pesan" rows="5" placeholder="Tulis pesan kepada kepala daerah disini"></textarea>

          <input class="submit" type="submit" value="Kirim Pesan" name="kirim-pesan" />
        </form>
      </div>
    </main>
  </body>
</html>
