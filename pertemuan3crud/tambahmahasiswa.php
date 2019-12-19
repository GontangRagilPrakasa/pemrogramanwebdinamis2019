<?php 
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$nim=$_POST['nim'];
	$username=$_POST['username'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$asal=$_POST['asal'];
	$ttl=$_POST['ttl'];	

	$input=mysqli_query($konek,"INSERT INTO pwd2 VALUES('$nim','$username','$jenis_kelamin','$alamat','$asal','$ttl')") or die (mysqli_error($konek));
	if($input){
		header('location:index.php');
	}
}
?> 