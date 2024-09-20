<?php
include "koneksi.php";
$kd_mobil=$_POST['kd_mobil'];
$nopol=$_POST['nopol'];
$warna=$_POST['warna'];
$jenis=$_POST['jenis'];
$jenis_mobil=$_POST['jenis_mobil'];
$kapasitas=$_POST['kapasitas'];
$kondisi=$_POST['kondisi'];
$query=mysqli_query($koneksi,"update mobil set nopol='$nopol',warna='$warna',jenis='$jenis',jenis_mobil='$jenis_mobil',kapasitas='$kapasitas',kondisi='$kondisi' where kd_mobil='$kd_mobil'");
header('location:?page=Project/index');
?>