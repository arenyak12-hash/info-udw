<?php
session_start();
include "../config/database.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi,
        "SELECT * FROM admin 
         WHERE username='$username' AND password='$password'"
    );

    if (mysqli_num_rows($query) == 1) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Login gagal</div>";
    }
}
?>

<h3>Login Admin</h3>
<form method="post">
    <input type="text" name="username" class="form-control mb-2" placeholder="Username">
    <input type="password" name="password" class="form-control mb-2" placeholder="Password">
    <button name="login" class="btn btn-primary">Login</button>
</form>
