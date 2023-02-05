<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $id_pelanggaran = $_POST['id_pelanggaran'];



    mysqli_query($koneksi, "INSERT INTO tbl_list VALUES(null, '$nis','$id_pelanggaran')");

    echo "<script>
            alert('Data siswa berhasil disimpan');
            document.location.href = 'list.php';
    </script>";
    return;
}
?>