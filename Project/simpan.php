<?php
include "koneksi.php";
$kd_mobil=$_POST['kd_mobil'];
$nopol=$_POST['nopol'];
$warna=$_POST['warna'];
$jenis=$_POST['jenis'];
$jenis_mobil=$_POST['jenis_mobil'];
$kapasitas=$_POST['kapasitas'];
$kondisi=$_POST['kondisi'];
$query=mysqli_query($koneksi,"insert into mobil(kd_mobil,nopol,warna,jenis,jenis_mobil,kapasitas,kondisi) values('$kd_mobil','$nopol','$warna','$jenis','$jenis_mobil','$kapasitas','$kondisi')");
header('location:?page=Project/index');
?>