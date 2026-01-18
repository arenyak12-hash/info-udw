<?php
include "config/database.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id'");
$data = mysqli_fetch_assoc($query);
?>

<div class="news-detail">
    <h3><?= $data['judul']; ?></h3>
    
    <div class="news-meta">
        <i class="fas fa-calendar"></i> <?= $data['tanggal']; ?> | 
        <i class="fas fa-user"></i> <?= $data['penulis']; ?>
    </div>
    
    <?php if (!empty($data['gambar'])) { ?>
        <img src="assets/img/berita/<?= $data['gambar']; ?>" alt="<?= $data['judul']; ?>">
    <?php } ?>
    
    <div class="news-content">
        <?= nl2br($data['isi']); ?>
    </div>
    
    <a href="index.php?page=berita" class="back-link">← Kembali ke Berita</a>
</div>