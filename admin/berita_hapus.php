<?php
include "cek_login.php";
include "../config/database.php";

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM berita WHERE id='$id'");
header("Location: berita_data.php");
