<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim-pesan'])){

    // ambil data dari formulir
    $user_id = $_POST['user_id'];
    $pesan = $_POST['pesan']; 

    // buat query
    $cek_user = mysqli_num_rows(mysqli_query($db, "SELECT * FROM pesan WHERE user_id = '$user_id'"));
    if ($cek_user == 0) {
        $sql = "INSERT INTO pesan (user_id, pesan) VALUE ('$user_id', '$pesan')";
        $query = mysqli_query($db, $sql);
    }
    else {
        header("Location: message.php?status=gagal&user_id=$user_id");
    }

    // apakah query simpan berhasil?
    if($query && $cek_user == 0) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header("Location: message-sent?status=sukses&user_id=$user_id");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header("Location: message.php?status=gagal&user_id=$user_id");
    }


} else {
    die("Akses dilarang...");
}

?>