<?php session_start(); 
include "koneksi.php";
if(isset($_POST['login'])){
$nama_lengkap = $_POST['nama_lengkap']; 
$password=$_POST['password']; 

	if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {          
		$login=mysqli_query($konek,"SELECT * FROM user WHERE nama_lengkap='$nama_lengkap' AND password='$password'") or die(mysqli_error($konek));
		$ketemu=mysqli_num_rows($login);  //Digunakan untuk mendapatkan jumlah baris dari query yang dihasilkan oleh fungsi mysql_query() namun hanya berlaku pada perintah  SELECT dan SHOW.
		$r= mysqli_fetch_array($login); //Fungsi ini akan menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik.
		if ($ketemu > 0){   
			$_SESSION['nama_lengkap'] = $r['nama_lengkap'];   
			$_SESSION['password'] = $r['password'];
			header('location:admin/index.php'); 
			echo"USER BERHASIL LOGIN<br>"; 
			echo "nama_lengkap =",$_SESSION['nama_lengkap'],"<br>"; 
			echo "password=",$_SESSION['password'],"<br>"; 
			echo "<a href=logout.php><b>LOGOUT</b></a></center>"; 
		} 
		else{   
			echo "<center>Login gagal! username & password tidak benar<br>";   
			echo "<a href=index.php><b>ULANGI LAGI</b></a></center>"; 
		} 
		mysqli_close($konek);             
	} else { 
		echo "<center>Login gagal! Captcha tidak sesuai<br>";   
		echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";    
	} 
}
 ?> 