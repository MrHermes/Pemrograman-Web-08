<?php

include("config.php");

if (isset($_POST['balas'])) {
    $id = $_POST['id'];
    $balasan = $_POST['balasan'];
    if ($balasan != '') {
        $sql = "UPDATE pesan SET balasan='$balasan' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            header('Location: admin.php?status=sukses');
        }
        else {
            header('Location: admin.php?status=gagal');
        }
    }
    else {
        header('Location: admin.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>