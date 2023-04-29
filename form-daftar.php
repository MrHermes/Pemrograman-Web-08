<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="css/lmao.css" />
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <h2>Formulir Pendaftaran Siswa Baru</h2>
        <form action="proses-pendaftaran.php" method="POST" class="login-form">
          <input type="text" placeholder="Nama Lengkap" name="nama" />
          <input type="text" placeholder="Alamat" name="alamat" />
          <h3>Jenis Kelamin</h3>
          <label for="jenis_kelamin" style="display: flex; padding-bottom: 10px;">
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
          </label>
          <p>
          <h3 for="agama">Agama</h3>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
          </p>
          <input type="text" placeholder="Sekolah Asal" name="sekolah_asal" />
          <button type="submit" value="Daftar" name="daftar">Daftar</button>
        </form>
      </div>
    </div>
  </body>
</html>
