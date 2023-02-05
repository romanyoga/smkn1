<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit();
}

require_once "../config.php";

$id = $_GET['nis'];
$foto = $_GET['foto'];

mysqli_query($koneksi, "DELETE FROM tbl_siswa WHERE nis = '$id'");
if ($foto != 'default.png') {
    unlink('../asset/image/' . $foto);
}


echo "<script>
        alert('Data siswa berhasil dihapus..');
        document.location.href='siswa.php';
    </script>";
return;


?>