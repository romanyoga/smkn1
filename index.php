<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:auth/login.php");
    exit;
}

require_once "config.php";


$title = "Dashboard - SMK Negeri 1 Jakarta";
require_once "template/header.php";
require_once "template/navbar.php";
require_once "template/sidebar.php";


// $querySiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
// $jmlSiswa = mysqli_num_rows($querySiswa)

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        <text class="text-danger"><b>Jika Siswa Mendapatkan Point 100, Maka Akan Dikeluarkan
                                !!!</b></text>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Jumlah Siswa</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h5 class="small text-white stretched-link">103 Orang</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body">Jumlah Guru</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h5 class="small text-white stretched-link">8 Orang</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Tipe Pelanggaran</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h5 class="small text-white stretched-link">7 Tipe</h5>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <?php


    require_once "template/footer.php";

    ?>