<?php
include "koneksi.php";
		if (isset($_POST['simpan'])) {
			$nama_lengkap = $_POST['nama_lengkap'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$level = 'mahasiswa';
			
			$input=mysqli_query($konek,"INSERT INTO user (nama_lengkap, password, email, level) VALUES('$nama_lengkap','$password','$email','$level')") or die (mysqli_error($konek));
			if($input){
			echo header("location:index.php");
	}
			
}
?>