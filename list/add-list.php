<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";
$title = "Tambah List - SMK Negeri 1 Jakarta";
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
                <h1 class="mt-4">Tambah List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="list.php">List Pelanggaran</a></li>
                    <li class="breadcrumb-item active">Tambah List Pelanggaran</li>
                </ol>
                <form action="proses-list.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah List</span>
                            <button type="submit" name="simpan" class="btn btn-primary float-end"><i
                                    class="fa-solid fa-floppy-disk"></i> Simpan</button>
                            <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i
                                    class="fa-solid fa-xmark"></i>
                                Reset</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row ps-4">
                                        <select name="nis" id="nis" class="form-select">
                                            <option value="">--Pilih Siswa--</option>

                                            <?php

                                            $querySiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                                            while ($data = mysqli_fetch_array($querySiswa)) { ?>
                                                <option value="<?= $data['nis'] ?>"><?= $data['nis'] . ' - ' . $data['nama'] . ' - ' . $data['kelas'] . ' - ' . $data['jurusan'] ?>
                                                </option>
                                                <?php
                                            } ?>
                                        </select>

                                    </div>
                                    <div class="mb-3 row ps-4">
                                        <select name="id_pelanggaran" id="id_pelanggaran" class="form-select">
                                            <option value="">--Pilih Pelanggaran--</option>

                                            <?php
                                            $queryPelanggaran = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggaran");
                                            while ($data = mysqli_fetch_array($queryPelanggaran)) { ?>
                                                <option value="<?= $data['id_pelanggaran'] ?>"><?=
                                                      $data['nama_pelanggaran'] . ' - ' . $data['point_pelanggaran'] ?></option>
                                                <?php
                                            } ?>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>

    <?php } ?>



    <?php

    require_once "../template/footer.php";

    ?>