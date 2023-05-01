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
          <tr>
            <td>1</td>
            <td>Muhammad Ersya Vinorian</td>
            <td>081234567890</td>
            <td>
              Jl. Perumahan Puncak Nirwana Blok X No. 12 Kecamatan Sukolilo
              aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            </td>
            <td>2023-04-29 02:00</td>
            <td>
              <div class="responded">Sudah Dibalas</div>
            </td>
            <td>
              <form method="get">
                <button
                  name="id"
                  type="submit"
                  value="id"
                  class="overview"
                  onclick="showModal()"
                >
                  Lihat Pesan
                </button>
              </form>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>Muhammad Ersya Vinorian</td>
            <td>081234567890</td>
            <td>
              Jl. Perumahan Puncak Nirwana Blok X No. 12 Kecamatan Sukolilo
              aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            </td>
            <td>2023-04-29 02:00</td>
            <td>
              <div class="responded">Sudah Dibalas</div>
            </td>
            <td>
              <form method="get">
                <button
                  name="id"
                  type="submit"
                  value="1"
                  class="overview"
                  onclick="showModal()"
                >
                  Lihat Pesan
                </button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="modal <?php echo $modal_classname ?>" id="modal">
      <form class="message-overview" method="post">
        <!-- Fetch Data Here -->
        <h2>Pesan Dari<br />Muhammad Ersya Vinorian</h2>

        <label for="pesan">Pesan</label>
        <textarea name="pesan" readonly>
Selamat Hari Raya Idul Fitri, Mohon Maaf Lahir dan Batin</textarea
        >

        <label for="balasan">Balasan</label>
        <textarea name="balasan" placeholder="Tulis balasan di sini"></textarea>

        <div class="message-detail-button">
          <button class="cancel" type="button" onclick="closeModal()">
            Batal
          </button>
          <button class="send" type="submit">Kirim Balasan</button>
        </div>
      </form>
    </div>
  </body>
</html>
