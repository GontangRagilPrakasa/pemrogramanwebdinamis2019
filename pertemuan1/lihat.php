 <?php
 	include "../library/import.php";
 	include "navbar.php";
 ?>
 <br>
<div class="container">
<div class="row">
<a href="index.php" class="btn btn-success" id="tambah">Tambah</a>
<a href="upload.php" class="btn btn-success" id="tambah">Upload File</a>
 <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>Status</th>
      <th>Komentar</th>
    </tr>
  </thead>
<?php 
echo "<head><title>My Guest Book</title></head>"; 
$fp = fopen("guestbook.txt","r");  
 while ($isi = fgets($fp,80)) { 
 	echo '<tbody>
 	<tr class="active">';
 	$pisah = explode("|",$isi); 
 	echo "<td>$pisah[0]</td>"; 
 	echo "<td>$pisah[1]</td>"; 
 	echo "<td>$pisah[2]</td>"; 
 	echo "<td>$pisah[3]</td>"; 
 	echo "<td>$pisah[4]</td>"; 
 } 
 ?>
 </table> 
 </div>
 </div> 