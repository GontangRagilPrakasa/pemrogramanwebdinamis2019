<?php 
$lokasi_file =  $_FILES['fupload']['tmp_name']; 
$nama_file   = $_FILES['fupload']['name']; 
$deskripsi   = $_POST['deskripsi']; 
$direktori = "C:/xampp/htdocs/PWD/Pertemuan1/fileupload/$nama_file"; 
// if (move_uploaded_file($lokasi_file, $direktori)) { echo "Nama File   : <b>$nama_file</b> berhasil di upload <br>"; echo "Deskripsi File :$deskripsi"; } 
// 	else{      echo "File gagal diupload";      
// }
if(move_uploaded_file($lokasi_file, $direktori)){
	header("location: upload.php");
}
else{
	echo "File gagal diupload";
}
echo "<a href='download.php'> Download file ini </a>"; 
echo "<a href='index.php'> Home </a>"; 
?> 