<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = htmlspecialchars($_POST['nama']);
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $foto = htmlspecialchars($_FILES['image']['name']);

    if ($foto != null) {
        $url = "add-guru.php";
        $foto = uploadimg($url);
    } else {
        $foto = 'default.png';
    }


    mysqli_query($koneksi, "INSERT INTO tbl_guru VALUES(null, '$nip','$nama','$mata_pelajaran','$alamat','$telepon','$foto')");

    echo "<script>
            alert('Data guru berhasil disimpan');
            document.location.href = 'guru.php';
    </script>";
    return;
} else if (isset($_POST['update'])) {
    $nip = $_POST['nip'];
    $nama = htmlspecialchars($_POST['nama']);
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $foto = htmlspecialchars($_POST['fotoLama']);

    if ($_FILES['image']['error'] === 4) {
        $fotoGuru = $foto;
    } else {
        $url = "guru.php";
        $fotoGuru = uploadimg($url);
        if ($foto != 'default.png') {
            unlink('../asset/image/' . $foto);
        }
    }


    mysqli_query($koneksi, "UPDATE tbl_guru SET 
    nama = '$nama',
    mata_pelajaran = '$mata_pelajaran',
    alamat = '$alamat',
    telepon = '$telepon',
    foto = '$fotoGuru'
    WHERE NIP = '$nip'
    ");

    echo "<script>
        alert('Data guru berhasil diupdate..');
        document.location.href='guru.php';
    </script>";
    return;
}

?>