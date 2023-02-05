<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit();
}

require_once "../config.php";



$id = $_GET['nama_pelanggaran'];

mysqli_query($koneksi, "DELETE FROM tbl_pelanggaran WHERE nama_pelanggaran = '$id'");


echo "<script>
        alert('Data pelanggaran berhasil dihapus..');
        document.location.href='pelanggaran.php';
    </script>";
return;

?>