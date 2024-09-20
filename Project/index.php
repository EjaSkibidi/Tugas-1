<?php
include "koneksi.php";
?>
<div class="container">
<h1 align='center'>Data Mobil</h1>
<a href="?page=Project/tambah" align='center' class="btn btn-primary" style="color:white; text-decoration:none">Tambah</a>
<table class="table table-striped table-bordered">
    <thead>
    <tr align="center">
        <td><b>KD Mobil</b></td>
        <td><b>Nopol</b></td>
        <td><b>Warna</b></td>
        <td><b>Jenis</b></td>
        <td><b>Jenis mobil</b></td>
        <td><b>Kapasitas</b></td>
        <td><b>Kondisi</b></td>
    </tr>
    </thead>
    <?php
    $query=mysqli_query($koneksi,"select * from mobil");
    while($data=mysqli_fetch_array($query)){
        ?>
        <tbody>
        <tr align="center">
            <td><?php echo $data ['kd_mobil']?></td>
            <td><?php echo $data ['nopol']?></td>
            <td><?php echo $data ['warna']?></td>
            <td><?php echo $data ['jenis']?></td>
            <td><?php echo $data ['jenis_mobil']?></td>
            <td><?php echo $data ['kapasitas']?></td>
            <td><?php echo $data ['kondisi']?></td>
            <td>
            <button class="btn btn-danger"><a style="color:white; text-decoration:none" href="?page=Project/hapus&kd_mobil=<?php echo $data['kd_mobil']?>">Hapus</a></button>
            <button class="btn btn-primary"><a style="color:white; text-decoration:none" href="?page=Project/edit&kd_mobil=<?php echo $data['kd_mobil']?>">Edit</a></button>
            </td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</div>