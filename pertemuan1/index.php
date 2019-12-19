<!DOCTYPE>
<html>
<head>
	<title>Aplikasi PHP</title>
	<?php
	include "../library/import.php";
	?>
</head>
<body>
	<?php
		include "../navbar.php";
	?>
	<div class="container">
	  <div class="list-group">
	    <a href="#" class="list-group-item list-group-item-danger">Pengumuman</a>
	    <a href="resetcounter.php" class="list-group-item"><?php include"counter.php"; ?></a>
	</div>
	</div>


<div class="container">
<div class="col-md-6 col-md-offset-3">
  <h2>Form Buku Tamu</h2>
  <form action="proses.php" method="POST" >
    <div class="form-group">
      <label for="email">Nama Lengkap : </label>
      <input type="text" class="form-control" id="email" placeholder="Masukkan Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="pwd">Alamat</label>
      <input type="text" class="form-control" id="pwd" placeholder="Masukkan alamat" name="alamat">
    </div>
    <div class="form-group">
      <label for="pwd">Status</label>
	    <div class="radio">
	      <label><input type="radio" name="status" checked>Menikah</label>
	    </div>
	    <div class="radio">
	      <label><input type="radio" name="status">Single</label>
	    </div>
    </div>
    <div class="form-group">
      <label for="pwd">Komentar</label>
      <input type="text" class="form-control" id="pwd" placeholder="Masukkan Komentar" name="komentar">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" onclick="myFunction()">Kirim Data</button>
    <a class="btn btn-default" href="lihat.php">Buku Tamu</a>
    <a class="btn btn-default" href="upload.php">Upload File</a>
  </form>
</div>
</div>
</body>
	<script>
	function myFunction() {
	  var txt;
	  if (confirm("Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu")) {
	    txt = "Data anda sudah tercatat";
	  } else {
	    txt = "Data anda bleum tercatat";
	  }
	  document.getElementById("demo").innerHTML = txt;
	}
	</script>
</html>
