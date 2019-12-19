<?php 
include 'koneksi.php';
$nim=$_GET['nim'];
if(isset($_GET['nim'])){
	$del=mysqli_query($konek,"DELETE FROM pwd2 WHERE nim='$nim'");
		if($del){
			header('location:index.php');
		}else{
			echo 'Gagal';
		}
}
?>