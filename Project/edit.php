<?php
include "koneksi.php";
$kd_mobil=$_GET['kd_mobil'];
$query=mysqli_query($koneksi,"select * from mobil where kd_mobil='$kd_mobil'");
$data=mysqli_fetch_array($query);
?>

<h1 align='center'>Edit Data</h1>
<form action="?page=Project/update" method="POST" enctype="multipart/form-data">
  
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">KD Mobil</span>
  <input type="int" class="form-control" name="kd_mobil" value=<?php echo $data['kd_mobil']?>>
</div>
        
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Nopol</span>
  <input type="text" class="form-control" name="nopol" value=<?php echo $data['nopol']?>>
</div>
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Warna</span>
  <input type="text" class="form-control" name="warna" value=<?php echo $data['warna']?>>
</div>
        
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Jenis</span>
  <input type="text" class="form-control" name="jenis" value=<?php echo $data['jenis']?>>
</div>
        
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Jenis Mobil</span>
  <select class="form-control" name="jenis_mobil" id="">
        <?php
         $query=mysqli_query($koneksi,"select * from versi");
         while($data=mysqli_fetch_array($query)){
            ?>
            <option value="<?= $data['jenis_mobil'] ?>"><?= $data['jenis_mobil'] ?></option>
            <?php
            }
            ?>
    </select>
</div>


<?php
$kd_mobil=$_GET['kd_mobil'];
$query=mysqli_query($koneksi,"select * from mobil where kd_mobil='$kd_mobil'");
$data=mysqli_fetch_array($query);
?>
        
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Kapasitas</span>
  <input type="text" class="form-control" name="kapasitas" value=<?php echo $data['kapasitas']?>>
</div>


            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Kondisi</span>
  <input type="text" class="form-control" name="kondisi" value=<?php echo $data['kondisi']?>>
</div>

            <button class="btn btn-success">Simpan</button>
</form>