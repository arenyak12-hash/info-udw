<?php
include "cek_login.php";
include "../config/database.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM berita WHERE id='$id'")
);

if (isset($_POST['update'])) {
    mysqli_query($koneksi,
        "UPDATE berita SET
        judul='$_POST[judul]',
        isi='$_POST[isi]'
        WHERE id='$id'"
    );
    header("Location: berita_data.php");
}
?>

<h3>Edit Berita</h3>
<form method="post">
    <input name="judul" value="<?= $data['judul']; ?>">
    <textarea name="isi"><?= $data['isi']; ?></textarea>
    <button name="update">Update</button>
</form>
