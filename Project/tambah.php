<?php
include "koneksi.php";
?>

<h1 align='center'>Tambah data</h1>
<form action="?page=Project/simpan" method="POST" enctype="multipart/form-data">
    
    
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">KD Mobil</span>
  <input type="int" class="form-control" name="kd_mobil">
</div>
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Nopol</span>
  <input type="text" class="form-control" name="nopol">
</div>
    
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Warna</span>
  <input type="text" class="form-control" name="warna">
</div>
        
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Jenis</span>
  <input type="text" class="form-control" name="jenis">
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
            
            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Kapasitas</span>
  <input type="text" class="form-control" name="kapasitas" value=<?php echo $data['kapasitas']?>>
</div>

            <div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping">Kondisi</span>
  <input type="text" class="form-control" name="kondisi" value=<?php echo $data['kondisi']?>>
</div>
        
        
        <button class="btn btn-success">Simpan</button>
        
    </table>
</form>