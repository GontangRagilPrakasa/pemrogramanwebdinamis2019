<!DOCTYPE>
<html>
<head>
	<title>SQL dan MYSQL</title>
	<?php
		include "koneksi.php";
		include "library/import.php";
		include "navbar.php";
	?>
</head>
<body>
	<div class="container">
		  <div class="row">
		  <a href="#" class="btn btn-success" id="tambah">Create</a>
		    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>NIM</th>
		      <th>Username</th>
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

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masukan Data Mahasiswa</h4>
        </div>
        <div class="modal-body">
		  <form class="form-horizontal" id="form" action="tambahmahasiswa.php" method="POST">
		  <fieldset>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nim</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" placeholder="masukan nim" id="nim" name="nim" required >
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nama Lengkap</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Nama" id="nama" name="username" required >
		      </div>
		    </div>
		     <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Alamat</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Alamat" id="nama" name="alamat" required >
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="select" class="col-lg-2 control-label">Jenis Kelamin</label>
		      <div class="col-lg-10">
		        <select class="form-control" id="select" name="jenis_kelamin" required>
		          <option value="l">Laki laki</option>
		          <option value="p">Perempuan</option>
		        </select>
		      </div>
		    </div>
		     <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Asal</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Asal" id="nama" name="asal" required >
		      </div>
		    </div>
		      <div class="form-group">
				    	<?php
				    		$tgl =  date('l, d-m-Y');
				    	?>
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
		</script>
		<script type="text/javascript">
		$('#tambah').click(function(){
		$('#myModal').modal('show'); 
		});

		  </script>


	</div>
</body>
</html>