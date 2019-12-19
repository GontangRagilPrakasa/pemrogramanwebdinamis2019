<?php 
// if(isset($_POST['simpan'])){
// 	include 'koneksi.php';
// 	$nim=$_POST['nim'];
// 	$username=strtoupper($_POST['username']);
// 	// $username=$_POST['username'];
// 	$jenis_kelamin=$_POST['jenis_kelamin'];
// 	$alamat=$_POST['alamat'];
// 	$asal=$_POST['asal'];
// 	$ttl=$_POST['ttl'];
// 	$email = $_POST['email'];


// 	echo $email;
// 	$input=mysqli_query($konek,"INSERT INTO pwd2 VALUES('$nim','$username','$jenis_kelamin','$alamat','$asal','$ttl', '$email')") or die (mysqli_error($konek));
// 	if($input){
// 		header('location:index.php');
// 	}
// }
?> 
<?php
		$file = "mahasiswa.json";

		$mahasiswa = file_get_contents($file);
		$datajson = json_decode($mahasiswa, true);
		//menambah file dengan json
		if(isset($_POST['simpan'])){
			$datajson[] = array(
				'nim' => $_POST['nim'],
				'username' => $_POST['username'],
				'email' => $_POST['email'],
				'jenis_kelamin' => $_POST['jenis_kelamin'],
				'alamat' => $_POST['alamat'],
				'asal' => $_POST['asal'],
				'ttl'=> $_POST['ttl']
				
			);
		}
			$tambahjson = json_encode($datajson, JSON_PRETTY_PRINT);
			$prosestambahjson = file_put_contents($file, $tambahjson);
			if($prosestambahjson){
				header('location:index.php');
		 	}
			
	?>