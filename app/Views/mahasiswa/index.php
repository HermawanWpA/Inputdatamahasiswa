<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <?php if (session()->getFlashdata('massage')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('massage') ?>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">View Tables</h1>
    <p class="mb-4">Hasil data Mahasiswa</a>.</p>


    <div class="row">
        <div class="col-md-8">
            <?php
            if (session()->get('err')) {
                echo "<div class='alert alert-danger' role='alert'>" . session()->get('err') . "</div>";
                session()->remove('err');
            }

            ?>
        </div>
    </div>

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

                            </td>
                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>