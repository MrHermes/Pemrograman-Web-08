<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['masuk'])){

    // ambil data dari formulir
    $email = $_POST['email'];
    $password = $_POST['password'];

    // buat query
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($db, $sql);
    
    // apakah query simpan berhasil?
    if($query) {
        $cek = mysqli_num_rows($query);
        if ($cek > 0) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: message.php');
        }
        else {
            header('Location: index.php?status=gagal');
        }
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>