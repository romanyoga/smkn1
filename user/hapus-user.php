<?php

require_once "../config.php";

$id = $_GET['username'];
$foto = $_GET['foto'];

mysqli_query($koneksi, "DELETE FROM tbl_user WHERE username = '$id'");
if ($foto != 'default.png') {
    unlink('../asset/image/' . $foto);
}


echo "<script>
        alert('Data siswa berhasil dihapus..');
        document.location.href='user.php';
    </script>";
return;


?>