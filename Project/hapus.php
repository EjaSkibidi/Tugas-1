<?php
include "koneksi.php";
$kd_mobil=$_GET['kd_mobil'];
$query=mysqli_query($koneksi,"delete from mobil where kd_mobil='$kd_mobil'");
header('location:?page=Project/index');
?>