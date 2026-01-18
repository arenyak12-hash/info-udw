<?php include "config/database.php"; ?>

<h2>Daftar Fakultas</h2>

<div class="faculty-grid">
<?php
$query = mysqli_query($koneksi, "SELECT * FROM fakultas");
while ($data = mysqli_fetch_assoc($query)) {
?>
    <div class="faculty-card">
        <?php if ($data['foto'] != "") { ?>
            <img src="assets/img/<?= $data['foto'] ?>" alt="<?= $data['nama_fakultas'] ?>">
        <?php } ?>

        <h4><?= $data['nama_fakultas'] ?></h4>
        <a href="index.php?page=fakultas_detail&id=<?= $data['id'] ?>">Detail Fakultas</a>
    </div>
<?php } ?>
</div>