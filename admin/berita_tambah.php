<?php
include "cek_login.php";
include "../config/database.php";

if (isset($_POST['simpan'])) {
    mysqli_query($koneksi,
        "INSERT INTO berita (judul, isi, tanggal)
         VALUES ('$_POST[judul]', '$_POST[isi]', CURDATE())"
    );
    header("Location: berita_data.php");
}
?>

<h3>Tambah Berita</h3>
<form method="post">
    <input name="judul" placeholder="Judul Berita">
    <textarea name="isi" placeholder="Isi Berita"></textarea>
    <button name="simpan">Simpan</button>
</form>
