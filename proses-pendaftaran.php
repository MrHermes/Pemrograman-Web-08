<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $no_telp = $_POST['no_telp'];
    $address = $_POST['address']; 

    // buat query
    $cek_user = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user WHERE email = '$email'"));
    if ($cek_user == 0) {
        $sql = "INSERT INTO user (email, password, name, no_telp, address) VALUE ('$email', '$password', '$name', '$no_telp', '$address')";
        $query = mysqli_query($db, $sql);
    }
    else {
        header('Location: form-daftar.php?status=gagal');
    }

    // apakah query simpan berhasil?
    if($query && $cek_user == 0) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-daftar.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>