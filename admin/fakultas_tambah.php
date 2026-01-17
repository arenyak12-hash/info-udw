<?php
include "cek_login.php";
include "../config/database.php";

if (isset($_POST['simpan'])) {
    mysqli_query($koneksi,
        "INSERT INTO fakultas 
        (nama_fakultas, deskripsi, program_studi, kontak)
        VALUES (
            '$_POST[nama]',
            '$_POST[deskripsi]',
            '$_POST[prodi]',
            '$_POST[kontak]'
        )"
    );
    header("Location: fakultas_data.php");
}
?>

<h3>Tambah Fakultas</h3>
<form method="post">
    <input name="nama" class="form-control mb-2" placeholder="Nama Fakultas">
    <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>
    <textarea name="prodi" class="form-control mb-2" placeholder="Program Studi"></textarea>
    <input name="kontak" class="form-control mb-2" placeholder="Kontak">
    <button name="simpan">Simpan</button>
</form>
