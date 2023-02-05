<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";
$title = "Tambah Guru - SMK Negeri 1 Jakarta";
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
                <h1 class="mt-4">Tambah Guru</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="guru.php">Guru</a></li>
                    <li class="breadcrumb-item active">Tambah Guru</li>
                </ol>
                <form action="proses-guru.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Guru</span>
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
                                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="nip" required
                                                class="form-control border-0 border-bottom ps-2" id="nip">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="nama" required
                                                class="form-control border-0 border-bottom ps-2" id="nama">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="mata_pelajaran" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <select name="mata_pelajaran" id="mata_pelajaran"
                                                class="form-select border-0 border-bottom" required>
                                                <option selected>--Pilih Mata Pelajaran--</option>
                                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                                <option value="Matematika">Matematika</option>
                                                <option value="TIK">TIK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Alamat"
                                                class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="telepon" required
                                                class="form-control border-0 border-bottom ps-2" id="telepon">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-4 text-center px-5">
                                    <img src="../asset/image/default.png" alt="gambar user" class="mb-3" width="40%">
                                    <input type="file" name="image" class="form-control form-control-sm">
                                    <small class="text-secondary">Pilih foto PNG, JPG atau JPEG maximal 1 MB</small>
                                    <div>
                                        <small class="text-secondary">Width = Height</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    <?php } ?>