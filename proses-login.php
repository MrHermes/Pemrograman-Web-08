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
    $user = mysqli_fetch_array($query);
    $cek_pesan = mysqli_num_rows(mysqli_query($db, "SELECT * FROM pesan WHERE user_id = '$user[0]'"));

    // apakah query simpan berhasil?
    if($query) {
        $cek = mysqli_num_rows($query);
        if ($cek > 0) {
            if ($cek_pesan > 0) {
                header("Location: message-sent.php?user_id=$user[0]");
            } else {
                header("Location: message.php?user_id=$user[0]");
            }
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