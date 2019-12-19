<!-- https://dokumenary.wordpress.com/2011/11/01/java-script-untuk-validasi-form-input/ -->
<!DOCTYPE>
<html>
<head>
	<title>Form Validasi</title>
	<link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link href="asset/css/sweetalert.css" rel="stylesheet">  
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="asset/css/datepicker.css">
	<style type="text/css">
		.loader{
			width: 130px;
			position: absolute;
			top: 50px;
			z-index: -1;
			left: 1330px;
			display: none;
		}
	</style>
	<?php
		include "koneksi.php";
		
		include "navbar.php";


	?>

</head>
<body>
	
	<div class="container">
		<a href="cetak_laporan.php" class="btn btn-success btn-lg">
     	 <span class="glyphicon glyphicon-print"></span> Cetak  
    	</a>
			<form action="" method="post">
				 <div class="form-group">

			      <div class="col-lg-10">
			        <input type="text" name="keyword" size="40"   class="form-control" autofocus placeholder="masukan keyword" autocomplete="off" id="keyword" >
			      </div>
			      <div class="form-group">
			     <label for="inputEmail" class="col-lg-2 control-label"></label>
			      <div class="col-lg-10">
			      <button class="btn btn-danger" type="submit" name="cari" id="tombol-cari">Cari!</button>
			      </div>
			      <img src="img/loader.gif" class="loader">
			</form>
			

		  <div class="row">
		  <a href="#" class="btn btn-success" id="tambah">Create</a>
		 
			<div id="container">
		    <table id="table" class="table table-striped table-hover ">


		  <thead>
		    <tr>
		      <th>No</th>
		      <th>NIM</th>
		      <th>Username</th>
		      <th>Email</th>
		      <th>Jenis Kelamin</th>
		      <th>Alamat</th>
		      <th>Asal</th>
		      <th>Tangal Lahir</th>
		      <th>Aksi</th>
		      
		    </tr>
		  </thead>
		  <?php 
		  include 'koneksi.php';
		  $query=mysqli_query($konek,"SELECT *FROM pwd2 ORDER BY nim DESC") or die (mysqli_error($konek));
		  if(mysqli_num_rows($query)==0){
		    echo '<tbody>
		    <tr class="active">
		      <td colspan="5">Tidak ada data yang di entrikan </td>
		    </tr>
		  </tbody>';
		    
		  }
		  else{
		    $no=1;
		    while($data=mysqli_fetch_assoc($query)){
		    echo '<tbody>
		    <tr class="active">';
		    echo '<td>'.$no.'</td>';
		    echo '<td>'.$data['nim'].'</td>';
		    echo '<td>'.$data['username'].'</td>';
		    echo '<td>'.$data['email'].'</td>';
		    echo '<td>'.$data['jenis_kelamin'].'</td>';
			echo '<td>'.$data['alamat'].'</td>';
			echo '<td>'.$data['asal'].'</td>';    
		    echo '<td>'.$data['ttl'].'</td>';

		    echo '<td><a class="btn btn-primary" href="updatemahasiswa.php?nim='.$data['nim'].'">Update</a>
		     <a class="btn btn-danger" href="hapusmahasiswa.php?nim='.$data['nim'].'">Delete</a></tr>';
		    echo '</tr>';
		    $no++;
		    }

		  }
		  
		  ?>
		</table> 
		</div>

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masukan Data Mahasiswa</h4>
        </div>
        <div class="modal-body">
		  <form class="form-horizontal" id="form" action="tambahmahasiswa.php" method="POST" onsubmit="return validasi_input(this)">
		  <fieldset>
		  	 
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nim</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" placeholder="masukan nim" id="nim" name="nim">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nama Lengkap</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Nama" id="username" name="username" >
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Email" id="email" name="email">
			</div>
			</div>
		     <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Alamat</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Alamat" id="alamat" name="alamat">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="select" class="col-lg-2 control-label">Jenis Kelamin</label>
		      <div class="col-lg-10">
		        <select class="form-control" id="select" name="jenis_kelamin" >
		          <option value="pilih" selected>Pilih</option>
		          <option value="l">Laki laki</option>
		          <option value="p">Perempuan</option>
		        </select>
		      </div>
		    </div>
		     <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Asal</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Asal" id="asal" name="asal" >
		      </div>
		    </div>
		      <div class="form-group">
				    	<!-- <?php
				    		$tgl =  date('l, d-m-Y');
				    	?> -->
				      <label for="inputEmail" class="col-lg-2 control-label">Tanggal Lahir</label>
				      <div class="col-lg-10">
				        <input type="date" class="form-control"  placeholder="" id="" name="ttl">
				      </div>
				    </div>
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <input type="submit" name="simpan" class="btn btn-primary" value="Tambahkan">
		      </div>
		    </div>
		  </fieldset>
		</form> 
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</body>
		

		<script type="text/javascript">
			
			
			function validasi_input(form){
				pola_nim=/^[0-9]+$/;
			   	if (!pola_nim.test(form.nim.value)){
			      alert ('NIM harus diisi dan harus angka');
			      form.nim.focus();
			      return false;
			   	}

			   	// pola_username=/^[a-zA-Z0-9\_\-]{6,100}$/;
			   	pola_username=/^[a-zA-Z0-9\_\-]/;
			   	if (!pola_username.test(form.username.value)){
			      alert ('Username minimal 6 karakter dan hanya boleh huruf atau angka!');
			      form.username.focus();
			      return false;
			   	}

			  	pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			  	if (!pola_email.test(form.email.value) ){
			    	alert ('Penulisan Email tidak benar');
			    	form.email.focus();
			    	return false;
			  	}
			  	
			  	if (form.alamat.value == ""){
			    alert("Alamat masih kosong!");
			    form.alamat.focus();
			    return (false);
				}

				if (form.jenis_kelamin.value =="pilih"){
			    	alert("Anda belum memilih Jenis Kelamin!");
			    	return (false);
			 	}

			   	if (form.asal.value == ""){
			    alert("Asal masih kosong!");
			    form.asal.focus();
			    return (false);
				}

				if (form.ttl.value == ""){
			    alert("TTL masih kosong!");
			    form.ttl.focus();
			    return (false);
				}
			   	
			  	return (true);
			}
			
		
		</script>
		

	</div>


<script type="text/javascript" src="asset/js/jquery.min.js"></script>
<!--<script src="javascript/jquery-3.4.1.min.js"></script>-->
<script src="javascript/scriptedjquery.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="asset/js/sweetalert.min.js"></script>
        <script src="asset/js/bootstrap-datepicker.js"></script>

 <!--<script src="javascript/scriptedajax.js"></script>-->
 

        <script type="text/javascript">
		$('#tambah').click(function(){
		$('#myModal').modal('show'); 
		});

		</script>


</body>

</html>