<?php
	include "../library/import.php";
	include "navbar.php";
?>
<div class="container">
<div class="col-md-6 col-md-offset-3">
  <h2>Form Upload File</h2>
<form enctype="multipart/form-data" action="prosesupload.php" method="POST" >
    <div class="form-group">
      <label for="email">File yang diupload : </label>
      <input type="file" name="fupload" class="form-control" id="email" placeholder="Masukkan File">
    </div>
    <div class="form-group">
      <label for="pwd">Deskripsi</label>
      <input type="text" class="form-control" id="pwd" placeholder="Masukkan alamat" name="deskripsi">
    </div>
    <button type="submit" class="btn btn-default" value=Upload onclick="myFunction()">Kirim Data</button>
    <a class="btn btn-default" href="download.php">Download File</a>
  </form>
</div>
</div>

<script>
	function myFunction() {
	  var txt;
	  if (confirm("File sudah diupload")) {
	    txt = "Data anda sudah tercatat";
	  } else {
	    txt = "Data anda bleum tercatat";
	  }
	  document.getElementById("demo").innerHTML = txt;
	}
	</script>