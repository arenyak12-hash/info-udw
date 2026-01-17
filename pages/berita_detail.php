<?php
include "config/database.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id'");
$data = mysqli_fetch_assoc($query);
?>

<h3><?= $data['judul']; ?></h3>
<?php if (!empty($data['gambar'])) { ?>
    <img src="assets/img/berita/<?= $data['gambar']; ?>" width="300">
<?php } ?>
<p><i><?= $data['tanggal']; ?> | <?= $data['penulis']; ?></i></p>
<p><?= nl2br($data['isi']); ?></p>

<a href="index.php?page=berita">← Kembali</a>