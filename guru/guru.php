<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";
$title = "Guru - SMK Negeri 1 Jakarta";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>
<?php
if (userLogin()['level'] != 2) {


    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Guru</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active">Guru</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Guru</span>
                        <a href="<?= $main_url ?>guru/add-guru.php" class="btn btn-sm btn-primary float-end"><i
                                class="fa-solid fa-plus"></i> Tambah Guru</a>
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
                                        <center>Foto</center>
                                    </th>
                                    <th scope="col">
                                        <center>NIP</center>
                                    </th>
                                    <th scope="col">
                                        <center>Nama</center>
                                    </th>
                                    <th scope="col">
                                        <center>Mata Pelajaran</center>
                                    </th>
                                    <th scope="col">
                                        <center>Alamat</center>
                                    </th>
                                    <th scope="col">
                                        <center>Telepon</center>
                                    </th>
                                    <th scope="col">
                                        <center>Operasi</center>
                                    </th>
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
                            

                                $queryGuru = mysqli_query($koneksi, "SELECT * FROM tbl_guru");
                                while ($data = mysqli_fetch_array($queryGuru)) { ?>

                                    <tr>
                                        <th scope="row">
                                            <?= $no++ ?>
                                        </th>
                                        <td>
                                            <center> <img src="../asset/image/<?= $data['foto'] ?>" class="rounded-circle"
                                                    alt="foto guru" width="60px"></center>
                                        </td>
                                        <td>
                                            <center>
                                                <?= $data['nip'] ?>
                                            </center>


                                        </td>
                                        <td>
                                            <center>
                                                <?= $data['nama'] ?>
                                            </center>


                                        </td>
                                        <td>
                                            <center>
                                                <?= $data['mata_pelajaran'] ?>
                                            </center>


                                        </td>
                                        <td>
                                            <center>
                                                <?= $data['alamat'] ?>
                                            </center>


                                        </td>
                                        <td>
                                            <center>
                                                <?= $data['telepon'] ?>
                                            </center>


                                        </td>
                                        <td>
                                            <center><a href="edit-guru.php?nip=<?= $data['nip'] ?>"
                                                    class="btn btn-sm btn-warning" title="Update Guru"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                <a href="hapus-guru.php?nip=<?= $data['nip'] ?>&foto=<?= $data['foto'] ?>"
                                                    class="btn btn-sm btn-danger" title="Hapus Guru"
                                                    onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </center>


                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

    <?php } ?>


    <?php

    require_once "../template/footer.php";

    ?>