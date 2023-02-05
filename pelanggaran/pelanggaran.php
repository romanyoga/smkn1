<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";
$title = "Pelanggaran - SMK Negeri 1 Jakarta";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pelanggaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Pelanggaran</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Pelanggaran</span>
                    <?php
                    if (userLogin()['level'] != 2) {


                        ?>
                        <a href="<?= $main_url ?>pelanggaran/add-pelanggaran.php"
                            class="btn btn-sm btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Pelanggaran</a>
                    <?php } ?>
                </div>
                <div class="card-body">
                    <div class="col-md-6 mx-auto">
                        <form method="POST">
                            <!-- <div class="input-group mb-3">
                                <input type="text" name="tcari" value="" class="form-control"
                                    placeholder="Masukkan kata kunci!">
                                <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
                                <button class="btn btn-danger" name="breset" type="submit">Reset</button>
                            </div> -->
                        </form>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">
                                    <center>Nama Pelanggaran</center>
                                </th>
                                <th scope="col">
                                    <center>Point</center>
                                </th>
                                <?php
                                if (userLogin()['level'] != 2) {


                                    ?>
                                    <th scope="col">
                                        <center>Operasi</center>
                                    </th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            // // untuk pencarian data
                            // // jika tombol cari di klik
                            // if (isset($_POST['bcari'])) {
                            //     //tampilkan data yang dicari
                            //     $keyword = $_POST['tcari'];
                            //     $q = "SELECT * FROM tbl_guru WHERE nip like '%$keyword%' or nama like '%$keyword%' or mata_pelajaran like '%$keyword%' or telepon like '%$keyword%'";
                            // } else {
                            //     $q = "SELECT * FROM tbl_guru";
                            // }
                            

                            $queryPelanggaran = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggaran");
                            while ($data = mysqli_fetch_array($queryPelanggaran)) { ?>

                                <tr>
                                    <th scope="row">
                                        <?= $no++ ?>
                                    </th>
                                    <td align="center">
                                        <?= $data['nama_pelanggaran'] ?>
                                    </td>
                                    <td align="center">
                                        <?= $data['point_pelanggaran'] ?>
                                    </td>
                                    <?php
                                    if (userLogin()['level'] != 2) {


                                        ?>
                                        <td align="center">
                                            <!-- <a href="edit-guru.php?nip=<?= $data['nip'] ?>" class="btn btn-sm btn-warning"
                                                                                    title="Update Guru"><i class="fa-solid fa-pen"></i></a> -->
                                            <a href="hapus-pelanggaran.php?nama_pelanggaran=<?= $data['nama_pelanggaran'] ?>"
                                                class="btn btn-sm btn-danger" title="Hapus Pelanggaran"
                                                onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>




    <?php

    require_once "../template/footer.php";

    ?>