<?php
include "config/database.php";

$cek = mysqli_query($koneksi, "SHOW TABLES LIKE 'berita'");
if (mysqli_num_rows($cek) == 0) {
    echo "<div class='alert alert-warning'>Tabel berita belum tersedia.</div>";
    return;
}

$query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC");
?>

<h2>Berita Universitas</h2>

<ul class="news-list">
<?php while ($data = mysqli_fetch_assoc($query)) { ?>
    <li class="news-item">
        <b><?= $data['judul']; ?></b>
        <br>
        <small><i class="fas fa-calendar"></i> <?= $data['tanggal']; ?></small>
        <br><br>
        <a href="index.php?page=berita_detail&id=<?= $data['id_berita']; ?>">
            <i class="fas fa-book-reader"></i> Baca Selengkapnya
        </a>
    </li>
<?php } ?>
</ul>