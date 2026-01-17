<?php include "cek_login.php"; ?>

<h3>Dashboard Admin</h3>
<p>Selamat datang, <b><?= $_SESSION['admin']; ?></b></p>

<ul>
    <li><a href="fakultas_data.php">Kelola Fakultas</a></li>
    <li><a href="berita_data.php">Kelola Berita</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
