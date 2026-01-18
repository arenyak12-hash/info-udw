<?php
include "config/database.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM fakultas WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<div class="detail-section">
    <h2><?= $data['nama_fakultas'] ?></h2>
    
    <?php if ($data['foto'] != "") { ?>
        <img src="assets/img/<?= $data['foto'] ?>" alt="<?= $data['nama_fakultas'] ?>">
    <?php } ?>

    <h4>📋 Deskripsi Fakultas</h4>
    <p><?= nl2br($data['deskripsi']); ?></p>

    <h4>🎓 Program Studi</h4>
    <p><?= nl2br($data['program_studi']); ?></p>

    <h4>📞 Kontak</h4>
    <p><?= $data['kontak'] ?></p>
    
    <a href="index.php?page=fakultas" class="back-link">← Kembali ke Daftar Fakultas</a>
</div>