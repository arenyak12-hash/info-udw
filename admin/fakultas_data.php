<?php
include "cek_login.php";
include "../config/database.php";
?>

<h3>Data Fakultas</h3>
<a href="fakultas_tambah.php">+ Tambah Fakultas</a>
<hr>

<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Nama Fakultas</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM fakultas");
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nama_fakultas']; ?></td>
    <td>
        <a href="fakultas_edit.php?id=<?= $data['id']; ?>">Edit</a> |
        <a href="fakultas_hapus.php?id=<?= $data['id']; ?>"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
