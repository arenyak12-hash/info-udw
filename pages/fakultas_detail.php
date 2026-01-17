<?php
include "config/database.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM fakultas WHERE id='$id'");
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM fakultas WHERE id='$id'")
);
?>

<h2><?= $data['nama_fakultas'] ?></h2>
<?php if ($data['foto'] != "") { ?>
    <img src="assets/img/<?= $data['foto'] ?>" width="200"><br>
<?php } ?>

<h4>Deskripsi</h4>
<p><?= nl2br($data['deskripsi']); ?></p>

<h4>Program Studi</h4>
<?= nl2br($data['program_studi']); ?>

<h4>Kontak</h4>
<p><?= $data['kontak'] ?></p>
<a href="index.php?page=berita">← Kembali</a>