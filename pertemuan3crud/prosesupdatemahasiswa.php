 <?php 
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$nimAsli= $_GET['nim'];
	$username=$_POST['username'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$asal=$_POST['asal'];
	$ttl=$_POST['ttl'];	

	 // echo $nim;
	 // echo $nama;
	 // echo $prodi;
	 // echo $nimAsli;

	 $update= mysqli_query($konek,"UPDATE pwd2 SET username='$username',jenis_kelamin='$jenis_kelamin', alamat='$alamat', asal='$asal', ttl='$ttl' WHERE nim='$nimAsli'") or die(mysqli_error($konek));
	if($update){
	//echo "berhasil";
	header("location:index.php");
	 }
	 else {
		echo "gagal";
	// 	//echo '<script>window.history.back()</script>';
	 }
}

?>
