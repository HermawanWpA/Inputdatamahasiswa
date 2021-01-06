<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <?php if (session()->getFlashdata('massage')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('massage') ?>
        </div>
    <?php endif; ?>


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Input Data Tables</h1>
    <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambah">
            <i class="fa fa-plus"> Tambah Data</i>
        </button>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php
            if (session()->get('err')) {
                echo "<div class='alert alert-danger p-0 pt-2' role='alert'>" . session()->get('err') . "</div>";
                session()->remove('err');
            }

            ?>
        </div>
    </div>

    <br>
    <br>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat date</th>
                            <th>No Handphone</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat date</th>
                            <th>No Handphone</th>
                            <th>Opsi</th>
                        </tr>
                    </tfoot>
                    <?php
                    $i = 1; ?>
                    <?php foreach ($mahasiswa->getResultArray() as $row) : ?>

                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['mhs_nim']; ?></td>
                            <td><?= $row['mhs_nama']; ?></td>
                            <td><?= $row['mhs_jenisKelamin']; ?></td>
                            <td><?= $row['mhs_tempatLahir']; ?></td>
                            <td><?= $row['mhs_tanggalLahir']; ?></td>
                            <td><?= $row['mhs_alamat']; ?></td>
                            <td><?= $row['mhs_telepon']; ?></td>
                            <td>
                                <a href="<?php echo base_url('mahasiswa/hapus/' . $row['mhs_nim']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                                    <i class="fa fa-trash"></i>
                                </a></td>
                            </td>
                            </td>
                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>

</div>
<!-- modal simpan data -->
<div class="modal fade" id="modaltambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('mahasiswa/tambah'); ?>" method="post">
                    <div class="form-grup mb-0">
                        <label for="mhs_nim"></label>
                        <input type="text" name="mhs_nim" id="mhs_nim" class="form-control" placeholder="Masukan NIM">
                    </div>
                    <div class="form-grup mb-0">
                        <label for="mhs_nama"></label>
                        <input type="text" name="mhs_nama" id="mhs_nama" class="form-control" placeholder="Masukan Nama">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="mhs_jenisKelamin" class="form-label">Jenis Kelamin :</label>
                        <select id="mhs_jenisKelamin" name="mhs_jenisKelamin" class="form-select">
                            <option selected>Choose...</option>
                            <option>L</option>
                            <option>P</option>
                        </select>
                    </div>

                    <div class="form-grup mb-0">
                        <label for="mhs_tempatLahir"></label>
                        <input type="text" name="mhs_tempatLahir" id="mhs_tempatLahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>

                    <div class="form-grup mb-0">
                        <label for="mhs_tanggalLahir"></label>
                        <input type="date" name="mhs_tanggalLahir" id="mhs_tanggalLahir" class="form-control" placeholder="Masukan Tanggal Lahir">

                    </div>

                    <div class="form-grup mb-0">
                        <label for="mhs_alamat"></label>
                        <input type="text" name="mhs_alamat" id="mhs_alamat" class="form-control" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-grup mb-0">
                        <label for="mhs_telepon"></label>
                        <input type="text" name="mhs_telepon" id="mhs_telepon" class="form-control" placeholder="Masukan No Handphone">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
        </form>
    </div>
</div>








<?= $this->endSection(); ?>