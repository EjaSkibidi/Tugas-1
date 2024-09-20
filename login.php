<!DOCTYPE html>
<html>
<head>
    <title>Halama login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="kotak_login">
<?php
include "koneksi.php";
?>
<div class="kotak_login">
    <h1 class="tulisan_login">Halaman Login</h1>
<form action="" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username">
    <br>
   <label>Password</label> 
   <input type="password" name="password" class="form_login" placeholder="Password">
    <br>
    <button class="tombol_login" name="login">Login</button>
<?php
if (isset($_POST['login'])) {
    //echo "proses";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from users where username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);
    // echo $cek;
    if ($cek > 0) {
        //berhasil login
        session_start();
        $_SESSION['status'] = "sukses";
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header('location:index.php');
    }
}
?>
</form>
</body>
</html>
