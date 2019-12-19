  <?php 
include 'koneksi.php';
$nim=$_GET['nim'];
$show=mysqli_query($konek,"SELECT * FROM pwd2 WHERE nim='$nim'");
if(mysqli_num_rows($show)==0){
  echo '<script>window.history.back()</script>';
}
else {
  $data = mysqli_fetch_assoc($show);
}

include 'library/import.php';
include 'navbar.php';
?>
<div class="container">
<div class="col-md-7">
  <form class="form-horizontal" action="prosesupdatemahasiswa.php?nim=<?php  echo "$nim"; ?>" method="POST">
  <fieldset>
     <h4 class="modal-title">Update Data Mahasiswa</h4>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nim</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="masukan nim" name="nim" value=" <?php echo $data['nim']; ?>" disabled="true">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nama Lengkap</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  placeholder="Masukan Nama" name="username" value="<?php echo $data['username']; ?>" required>
      </div>
    </div>
    <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Alamat</label>
          <div class="col-lg-10">
            <input type="text" class="form-control"  placeholder="Masukan Alamat" id="nama" name="alamat" value="<?php echo $data['alamat']; ?>" required >
          </div>
        </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="jenis_kelamin" required>
          <option value="l"<?php if($data['jenis_kelamin']=='l'){echo 'selected';} ?> >Laki-laki</option>
          <option value="p" <?php if($data['jenis_kelamin']=='p'){echo 'selected';} ?> >Perempuan</option>
        </select>
      </div>
    </div>
    <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Asal</label>
          <div class="col-lg-10">
            <input type="text" class="form-control"  placeholder="Masukan Asal" id="nama" name="asal" value="<?php echo $data['asal']; ?>" required >
          </div>
        </div>
          <div class="form-group">
              <?php
                $tgl =  date('l, d-m-Y');
              ?>
              <label for="inputEmail" class="col-lg-2 control-label">Tanggal Lahir</label>
              <div class="col-lg-10">
                <input type="date" class="form-control"  placeholder="" id="" name="ttl" value="<?php echo $data['ttl']; ?>">
              </div>
            </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="reset"  class="btn btn-danger" value="Batal">
        <input type="submit" name="simpan"  class="btn btn-primary" value="simpan">
      </div>
    </div>
  </fieldset>
</form> 
  </div>
</div>
 