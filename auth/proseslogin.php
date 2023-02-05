<?php

session_start();


require_once "../config.php";

// jika tombol login ditekan
if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    // $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    // $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $result = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");


    // cek username
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["ssLogin"] = true;
            $_SESSION["ssUser"] = $username;
            header("location:../index.php");
            exit;
        } else {
            echo "<script>
                alert('password salah..');
                document.location.href= 'login.php';
            </script>";
        }
    } else {
        echo "<script>
                alert('username tidak terdaftar..');
                document.location.href= 'login.php';
         </script>";
    }
    // $queryLogin = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");

    // if (mysqli_num_rows($queryLogin) === 1) {
    //     $row = mysqli_fetch_assoc($queryLogin);
    //     if (password_verify($password, $row['password'])) {
    //         //set session
    //         $_SESSION['ssLogin'] = true;
    //         $_SESSION['ssUser'] = $username;
    //         header("location:../index.php");
    //         exit();
    //     } else {
    //         echo "<script>
    //             alert('Password salah..');
    //         </script>";
    //     }
    // } else {
    //     echo "<script>
    //             alert('Username tidak terdaftar..');
    //         </script>";
    // }

}


?>