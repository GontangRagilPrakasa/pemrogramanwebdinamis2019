<?php
		include "koneksi.php";
		include "library/import.php";
		include "navbar.php";
?>
<style type="text/css">

.captcha
{ font: italic bold 16px "Comic Sans MS", cursive, sans-serif; 
color:#a0a0a0;background-color:#c0c0c0;
width:100px;border-radius: 5px;
text-align:center;
text-decoration:line-through;
}
.errmsg
{color:#ff0000;}
</style>
<br><br>
<div class="container">
	<div class="col-md-12">
		<div class="col-md-6">
		<center><h4>Register</h4></center>
		  <form class="form-horizontal" id="form" action="tambahuser.php" method="POST" >
		  <fieldset>
		     <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nama Lengkap</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Nama" id="username" name="nama_lengkap" >
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" placeholder="masukan password" id="nim" name="password">
		      </div>
		    </div>
		   
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Email" id="email" name="email">
			</div>
			</div>
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <input type="submit" name="simpan" class="btn btn-primary" value="Register">
		        <input type="reset" name="reset" class="btn btn-danger" value="Reset">
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>

	<div class="col-md-6">

	<?php 
		include('koneksi.php');
		if(isset($_POST['login'])){
		  $nama_lengkap = mysqli_real_escape_string($konek,htmlentities($_POST['nama_lengkap']));
		  // $password = mysqli_real_escape_string($konek,htmlentities(sha1($_POST['password'])));
		  $password = $_POST['password'];
		 echo $nama_lengkap;
		 echo $password;
		  $sql = mysqli_query($konek,"SELECT * FROM user WHERE nama_lengkap='$nama_lengkap' AND password='$password'") or die(mysqli_error($konek));
		  $data=mysqli_fetch_array($sql);
		  $cek=mysqli_num_rows($sql);

		  if($cek>=1){
		    
		      $_SESSION['level']=$data['level'];
		      // $_SESSION['nama_lengkap']=$nama_lengkap;
		      switch ($data['level']) {
		        case 'mahasiswa':
		          header("location:admin/index.php");
		          break;
		        case 'dosen':
		          header("location:error/index.php");
		          break;
		        default:
		          echo "Eror";
		          break;
		      }
		  }
		  else{
		    echo '<div class="alert alert-dismissible alert-warning">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>uppss password atau username salah</strong></div>';
		  }
		}
		?>
	
		<center><h4>Login</h4></center>
		  <form class="form-horizontal" id="form" action="ceklogin.php" method="POST">
		  <fieldset>
		     <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nama Lengkap</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Nama" id="username" name="nama_lengkap" >
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" placeholder="masukan password" id="nim" name="password">
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Captcha</label>
		      <div class="col-lg-10">
		         <label for="inputEmail" class="col-lg-2 control-label"><img src='captcha.php' /></label>
		      </div>
		    </div>

		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Type Captcha</label>
		      <div class="col-lg-10">
		         <input type="text" class="form-control" placeholder="masukkan captcha_code" id="captcha_code" name="captcha_code">
		      </div>
		    </div>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <input type="submit" name="login" class="btn btn-primary" value="Login" >
		        <input type="reset" name="reset" class="btn btn-danger" value="Reset">
		      </div>
		    </div>



		  </fieldset>
		</form>
	</div>
</div> 
