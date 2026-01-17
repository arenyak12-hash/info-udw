<?php
include "cek_login.php";
include "../config/database.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM fakultas WHERE id='$id'")
);

if (isset($_POST['update'])) {
    mysqli_query($koneksi,
        "UPDATE fakultas SET
        nama_fakultas='$_POST[nama]',
        deskripsi='$_POST[deskripsi]',
        program_studi='$_POST[prodi]',
        kontak='$_POST[kontak]'
        WHERE id='$id'"
    );
    header("Location: fakultas_data.php");
}
?>

<h3>Edit Fakultas</h3>
<form method="post">
    <input name="nama" value="<?= $data['nama_fakultas']; ?>">
    <textarea name="deskripsi"><?= $data['deskripsi']; ?></textarea>
    <textarea name="prodi"><?= $data['program_studi']; ?></textarea>
    <input name="kontak" value="<?= $data['kontak']; ?>">
    <button name="update">Update</button>
</form>
