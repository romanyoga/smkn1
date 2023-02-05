<?php

session_start();

if (!isset($_SESSION['ssLogin'])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";
$title = "Update Guru - SMK Negeri 1 Jakarta";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";




$nip = $_GET['nip'];

$guru = mysqli_query($koneksi, "SELECT * FROM tbl_guru wHERE nip = '$nip'");
$data = mysqli_fetch_array($guru);



?>

<?php
if (userLogin()['level'] != 2) {


    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Update Guru</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="guru.php">Guru</a></li>
                    <li class="breadcrumb-item active">Update Guru</li>
                </ol>
                <form action="proses-guru.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <span class="h5 my-2"><i class="fa-solid fa-pen-to-square"></i> Update Guru</span>
                            <button type="submit" name="update" class="btn btn-primary float-end"><i
                                    class="fa-solid fa-floppy-disk"></i> Update</button>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="nip" readonly
                                                class="form-control-plaintext border-bottom ps-2" id="nip"
                                                value="<?= $nip ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="nama" required
                                                class="form-control border-0 border-bottom ps-2" id="nama"
                                                value="<?= $data['nama'] ?>">

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="mata_pelajaran" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <select name="mata_pelajaran" id="mata_pelajaran"
                                                class="form-select border-0 border-bottom" required>
                                                <?php
                                                $mata_pelajaran = ["Bahasa Indonesia", "Bahasa Inggris", "Matematika", "TIK"];
                                                foreach ($mata_pelajaran as $mapel) {
                                                    if ($data['mata_pelajaran'] == $mapel) { ?>
                                                        <option value="<?= $mapel; ?>" selected><?= $mapel; ?></option>
                                                        </option>
                                                        <?php
                                                    } else { ?>
                                                        <option value="<?= $mapel; ?>"><?= $mapel; ?></option>
                                                    <?php }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Alamat"
                                                class="form-control" required><?= $data['alamat'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <input type="text" name="telepon" required
                                                class="form-control border-0 border-bottom ps-2" id="telepon"
                                                value="<?= $data['telepon'] ?>">;

                                        </div>
                                    </div>

                                </div>
                                <div class=" col-4 text-center px-5">
                                    <input type="hidden" name="fotoLama" value="<?= $data['foto'] ?>">
                                    <img src="../asset/image/<?= $data['foto'] ?>" alt="" class="mb-3 rounded-circle"
                                        width="40%">
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



    <?php

    require_once "../template/footer.php";

    ?>