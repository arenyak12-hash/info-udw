<?php include "config/database.php"; ?>

<h2>Daftar Fakultas</h2>

<div style="display:flex; gap:20px; flex-wrap:wrap;">
<?php
$query = mysqli_query($koneksi, "SELECT * FROM fakultas");
while ($data = mysqli_fetch_assoc($query)) {
?>
    <div style="width:220px; border:1px solid #ccc; padding:10px;">
        <?php if ($data['foto'] != "") { ?>
            <img src="assets/img/<?= $data['foto'] ?>" width="100%">
        <?php } ?>

        <h4><?= $data['nama_fakultas'] ?></h4>
        <a href="index.php?page=fakultas_detail&id=<?= $data['id'] ?>">Detail</a>
    </div>
<?php } 
?>
</div>