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

<ul>
<?php while ($data = mysqli_fetch_assoc($query)) { ?>
    <li>
        <b><?= $data['judul']; ?></b>
        <br>
        <small><?= $data['tanggal']; ?></small>
        <br>
        <a href="index.php?page=berita_detail&id=<?= $data['id_berita']; ?>">
            Baca selengkapnya
        </a>
    </li>
<?php } ?>
</ul>