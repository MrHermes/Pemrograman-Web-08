<?php

include("config.php");

$modal_classname = isset($_GET['id']) ? "modal-open" : "";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="./modal.js"></script>
    <title>Silahturami Online</title>
  </head>
  <body>
    <div class="admin">
      <h1 class="admin-side">Data Silahturami Online</h1>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No.Handphone</th>
            <th>Alamat Rumah</th>
            <th>Tanggal Kirim</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Fetch Data Here -->
          <?php
            $sql = "SELECT p.id, u.name, u.no_telp, u.address, p.created_at, p.pesan, p.balasan FROM pesan p JOIN user u ON p.user_id = u.id";
            $query = mysqli_query($db, $sql);

            while ($pesan = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo   "<td>".$pesan['id']."</td>";
                echo   "<td>".$pesan['name']."</td>";
                echo   "<td>".$pesan['no_telp']."</td>";
                echo   "<td>".$pesan['address']."</td>";
                echo   "<td>".$pesan['created_at']."</td>";
                echo   "<td>";
                echo   $pesan['balasan'] ? "<div class='responded'>Sudah Dibalas</div>" : "<div class='not-responded'>Belum Dibalas</div>";
                echo   "</td>";
                echo   "<td>";
                echo     "<form method='GET'>";
                echo       "<button name='id' type='submit' value='".$pesan['id']."' class='overview' onclick='showModal()'>";
                echo         "Lihat Pesan";
                echo       "</button>";
                echo     "</form>";
                echo   "</td>";
                echo "</tr>";
            }
          ?>
        </tbody>
      </table>
      <?php if(isset($_GET['status'])): ?>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "<script type='text/javascript'>alert('Berhasail mengirim balasan');</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Balasan tidak boleh kosong');</script>";
                }
            ?>
         <?php endif; ?>
    </div>

    <div class="modal <?php echo $modal_classname ?>" id="modal">
      <form class="message-overview" action='proses-balas.php' method="POST">
        <?php if(isset($_GET['id'])): ?>
            <?php
                $id = $_GET['id'];
                $sql = "SELECT p.id, u.name, p.pesan, p.balasan FROM pesan p JOIN user u ON p.user_id = u.id WHERE p.id = $id";
                $query = mysqli_query($db, $sql);
                $pesan = mysqli_fetch_assoc($query);        
            ?>

            <h2>Pesan Dari<br /><?php echo $pesan['name'] ?></h2>

            <input type="hidden" name="id" value="<?php echo $pesan['id'] ?>" />

            <label for="pesan">Pesan</label>
            <textarea name="pesan" readonly><?php echo $pesan['pesan'] ?></textarea>

            <label for="balasan">Balasan</label>
            <textarea name="balasan" placeholder="Tulis balasan di sini"><?php echo $pesan['balasan'] ?></textarea>
        <?php endif; ?>

        <div class="message-detail-button">
          <button class="cancel" type="button" onclick="closeModal()">
            Batal
          </button>
          <input class="send" type="submit" value='Kirim Balasan' name='balas' />
        </div>
      </form>
    </div>
  </body>
</html>
