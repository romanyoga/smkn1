<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

if (isset($_POST['simpan'])) {
    $nama_pelanggaran = htmlspecialchars($_POST['nama_pelanggaran']);
    $point_pelanggaran = $_POST['point_pelanggaran'];



    mysqli_query($koneksi, "INSERT INTO tbl_pelanggaran VALUES(null, '$nama_pelanggaran','$point_pelanggaran')");

    echo "<script>
            alert('Data pelanggaran berhasil disimpan');
            document.location.href = 'pelanggaran.php';
    </script>";
    return;
}
?>