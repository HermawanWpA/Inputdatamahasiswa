<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<body>
    <h2>Form Tambah Mahasiswa</h2>
    <p>
        <button type="submit" onclick="window.location='<?= site_url('mahasiswa/index') ?>'">
            Kembali
        </button>
    </p>

    <p>
        <?= form_open('mahasiswa/simpanData') ?>
        <table>
            <tr>
                <td>NIM :</td>
                <td>
                    <input type="text" name="nim" maxlength="10" autofocus>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td>
                    <input type="text" name="nama" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jenisKelamin" value="L">Laki-laki
                    <input type="radio" name="jenisKelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir :</td>
                <td>
                    <input type="text" name="tempat" size="30"> / <input type="date" name="tanggal">
                </td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td>
                    <textarea name="alamat" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>No. Telepon :</td>
                <td>
                    <input type="text" name="telp" pattern="{0-9}">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan Data">
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
    </p>
</body>
<?= $this->endSection(); ?>