<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";
$title = "List Pelanggaran - SMK Negeri 1 Jakarta";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List Pelanggaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">List Pelanggaran</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data List Pelanggaran</span>
                    <?php
                    if (userLogin()['level'] != 2) {


                        ?>
                        <a href="<?= $main_url ?>list/add-list.php" class="btn btn-sm btn-primary float-end"><i
                                class="fa-solid fa-plus"></i> Tambah List Pelanggaran</a>
                    <?php } ?>
                </div>
                <div class="card-body">
                    <div class="col-md-6 mx-auto">
                        <form method="POST">
                            <!-- <div class="input-group mb-3">
                                <input type="text" name="tcari" value="<?=@$_POST['tcari'] ?>" class="form-control"
                                    placeholder="Masukkan kata kunci!">
                                <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
                                <button class="btn btn-danger" name="breset" type="submit">Reset</button>
                            </div> -->
                        </form>
                    </div>

                    <table class="table table-hover" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">
                                    <center>NIS</center>
                                </th>
                                <th scope="col">
                                    <center>Nama Siswa</center>
                                </th>
                                <th scope="col">
                                    <center>Kelas</center>
                                </th>
                                <th scope="col">
                                    <center>Jurusan</center>
                                </th>
                                <th scope="col">
                                    <center>Kategori Pelanggaran</center>
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

                            // //untuk pencarian data
                            // // jika tombol cari di klik
                            // if (isset($_POST['bcari'])) {
                            //     //tampilkan data yang dicari
                            //     $keyword = $_POST['tcari'];
                            //     $q = "SELECT * FROM tbl_list WHERE nis like '%$keyword%' or nama like '%$keyword%' or kelas like '%$keyword%' or jurusan like '%$keyword%'";
                            // } else {
                            //     $q = "SELECT * FROM tbl_list";
                            // }
                            
                            $query = "SELECT * FROM tbl_list INNER JOIN tbl_siswa ON tbl_list.nis = tbl_siswa.nis
                            INNER JOIN tbl_pelanggaran ON tbl_list.id_pelanggaran = tbl_pelanggaran.id_pelanggaran";
                            $queryList = mysqli_query($koneksi, $query);
                            while ($data = mysqli_fetch_array($queryList)) { ?>

                                <tr>
                                    <th scope="row">
                                        <?= $no++ ?>
                                    </th>
                                    <td>
                                        <center>
                                            <?= $data['nis'] ?>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <?= $data['nama'] ?>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <?= $data['kelas'] ?>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <?= $data['jurusan'] ?>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <?= $data['nama_pelanggaran'] ?>
                                        </center>

                                    </td>
                                    <td>
                                        <center>
                                            <?= $data['point_pelanggaran'] ?>
                                        </center>

                                    </td>
                                    <?php
                                    if (userLogin()['level'] != 2) {


                                        ?>
                                        <td>
                                            <center>
                                                <!-- <a href="edit-siswa.php?nis=<?= $data['nis'] ?>"
                                                                                        class="btn btn-sm btn-warning" title="Update Siswa"><i
                                                                                            class="fa-solid fa-pen"></i></a> -->
                                                <a href="hapus-list.php?nis<?= $data['nis'] ?>                                     <?= $data['nama_pelanggaran'] ?>"
                                                    class="btn btn-sm btn-danger" title="Hapus List"
                                                    onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </center>

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