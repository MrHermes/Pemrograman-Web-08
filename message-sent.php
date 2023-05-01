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
      <form class="message">
        <?php
          $user_id = $_GET['user_id'];
          $sql = "SELECT * FROM pesan WHERE user_id = '$user_id'";
          $query = mysqli_query($db, $sql);
          while($pesan_array = mysqli_fetch_array($query)){
              echo "<h1>Kirim<br />Silahturami Online</h1>";
              echo "<label for='pesan'>Pesan</label>";
              echo "<textarea name='pesan' readonly>".$pesan_array['pesan']."</textarea>";
              echo "<label for='balasan'>Balasan Kepala Daerah</label>";
              if ($pesan_array['balasan'] == NULL) {
                echo "<textarea name='balasan' readonly placeholder='Belum terdapat balasan dari kepala daerah'></textarea>";
              } else {
                echo "<textarea name='balasan' readonly>".$pesan_array['balasan']."</textarea>";
              }
          }
        ?>
      </form>
    </main>
  </body>
</html>
