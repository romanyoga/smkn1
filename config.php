<?php

//buat koneksi
$koneksi = mysqli_connect("localhost", "root", "", "smkn1");

// //cek koneksi
// if (mysqli_connect_errno()){
//     echo "Gagal koneksi ke database";
// } else {
//     echo "Berhasil koneksi";
// }

// url induk
$main_url = "http://localhost/smkn1/";

function uploadimg($url)
{
    $namafile = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmp = $_FILES['image']['tmp_name'];

    // cek file yg di upload
    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = explode('.', $namafile);
    $fileExtension = strtolower(end($fileExtension));
    if (!in_array($fileExtension, $validExtension)) {
        header("location:" . $url . '?msg=notimage');
        die;
    }

    // cek ukuran gambar
    if ($ukuran > 1000000) {
        header("location:" . $url . '?msg=oversize');
        die;
    }

    // generate nama file gambar
    $namafilebaru = rand(10, 1000) . '-' . $namafile;

    // upload gambar
    move_uploaded_file($tmp, "../asset/image/" . $namafilebaru);
    return $namafilebaru;


}
function getData($sql)
{
    global $koneksi;

    $result = mysqli_query($koneksi, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function userLogin()
{
    $userActive = $_SESSION['ssUser'];
    $dataUser = getData("SELECT * FROM tbl_user WHERE username = '$userActive'")[0];
    return $dataUser;
}