<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit();
}

require_once "../config.php";

$id = $_GET['nis'];
$id2 = $_GET['id_pelanggaran'];

mysqli_query($koneksi, "DELETE FROM tbl_list WHERE nis = '$id' nama_pelanggaran = '$id2'");


echo "<script>
        alert('Data list berhasil dihapus..');
        document.location.href='list.php';
    </script>";
return;


?>