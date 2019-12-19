<?php
 	include "../library/import.php";
 	include "navbar.php";
 	$myDir = "c:/xampp/htdocs/pwd/pertemuan1/fileupload/"; 
	$dir = opendir($myDir); 
 ?>
 <br>
<div class="container">
<div class="row">
<a href="index.php" class="btn btn-success" id="tambah">Tambah</a>
<a href="upload.php" class="btn btn-success" id="tambah">Upload File</a>
 <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Nama File</th>
    </tr>
  </thead>
<?php 
echo "<head><title>Isi folder (klik link untuk download</title></head>";

 while(false !== ($tmp = readdir($dir))) {
 	if ($tmp != "." && $tmp != "..") { 
 	echo '<tbody>
 	<tr class="active">';
 	echo "<td><a href='configdownload.php/?file=".$tmp."'>".$tmp."</a></td>";
 
 	}
 } 
  closedir($dir);
 ?>
 </table> 
 </div>
 </div> 
