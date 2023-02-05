<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";
$title = "Tambah Pelanggaran - SMK Negeri 1 Jakarta";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

// $queryNis = mysqli_query($koneksi, "SELECT max(nis) as maxnis FROM tbl_siswa");
// $data = mysqli_fetch_array($queryNis);
// $maxnis = $data["maxnis"];

// $noUrut = (int) substr($maxnis, 3, 3);
// $noUrut++;
// $maxnis = "NIS" . sprintf("%03s", $noUrut);


?>
<?php
if (userLogin()['level'] != 2) {


    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tambah Pelanggaran</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="pelanggaran.php">Pelanggaran</a></li>
                    <li class="breadcrumb-item active">Tambah Pelanggaran</li>
                </ol>
                <form action="proses-pelanggaran.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Pelanggaran</span>
                            <button type="submit" name="simpan" class="btn btn-primary float-end"><i
                                    class="fa-solid fa-floppy-disk"></i> Simpan</button>
                            <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i
                                    class="fa-solid fa-xmark"></i>
                                Reset</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="nama_pelanggaran" class="col-sm-2 col-form-label">Nama
                                            Pelanggaran</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="nama_pelanggaran" required
                                                class="form-control border-0 border-bottom ps-2" id="nama_pelanggaran">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="point_pelanggaran" class="col-sm-2 col-form-label">Point</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="point_pelanggaran" required
                                                class="form-control border-0 border-bottom ps-2" id="point_pelanggaran">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </main>

    <?php } ?>