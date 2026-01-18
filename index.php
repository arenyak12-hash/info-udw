<?php
include "pages/header.php";

$page = isset($_GET['page']) ? $_GET['page'] : "home";

$file = "pages/" . $page . ".php";

if (file_exists($file)) {
    include $file;
} else {
    echo "<h3>Halaman tidak ditemukan</h3>";
}

include "pages/footer.php";
?>