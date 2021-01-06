<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
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