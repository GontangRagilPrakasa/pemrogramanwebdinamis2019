<!DOCTYPE>
<html>
<head>
	<title>SQL dan MYSQL</title>
	<?php
		include "koneksi.php";
		include "../library/import.php";
		include "../navbar.php";
	?>
</head>
<body>
	<div class="container">
		  <div class="row">
		  <a href="#" class="btn btn-success" id="tambah">Tambah</a>
		  <a href="coba.php" class="btn btn-success" id="tambah">Tambah</a>
		    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Username</th>
		      <th>Jenis Kelamin</th>
		      <th>Alamat</th>
		      <th>Asal</th>
		      <th>Tangal Lahir</th>
		    </tr>
		  </thead>
		  <?php 
		  include 'koneksi.php';
		  $query=mysqli_query($konek,"SELECT *FROM pwd2 ORDER BY id_nama DESC") or die (mysqli_error($konek));
		  if(mysqli_num_rows($query)==0){
		    echo '<tbody>
		    <tr class="active">
		      <td colspan="5">Tidak ada data yang di entrikan </td>
		    </tr>
		  </tbody>';
		    
		  }
		  else{
		    $no=1;
		    while($data=mysql_fetch_assoc($query)){
		    echo '<tbody>
		    <tr class="active">';
		    echo '<td>'.$data['id_user'].'</td>';
		    echo '<td>'.$data['username'].'</td>';
		    echo '<td>'.$data['password'].'</td>';
			echo '<td>'.$data['tanggal_lahir'].'</td>';
			echo '<td>'.$data['jumlah_transaksi'].'</td>';    
		    echo '<td>'.$data['total_transaksi'].'</td>';

		    echo '<td><a class="btn btn-primary" href="edit-mhs.php?nim='.$data['id_user'].'">Edit</a>
		     <a class="btn btn-danger" href="hapus.php?nim='.$data['id_user'].'">Hapus</a></tr>';
		    echo '</tr>';
		    $no++;
		    }

		  }
		  
		  ?>
		</table> 

			

			<!-- <div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Jumlah Transaksi per 45000</label>
				<th>@<input class="form-control" type="number" name="jumlah_transaksi" id="harga_php" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				
				<th colspan="3" style="text-align:right">jumlah total</th>
				<th>@<input type="text" class="form-control"  name="total_transaksi" id="total" size="7" value="" readonly></th>
			</tr> -->
		</table>
		




		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Masukan Transaksi Permen</h4>
		        </div>
		        <div class="modal-body">
				<!--   <form class="form-horizontal" id="form" action="proses-add-data-transaksi.php" method="POST"> -->
				
				  <fieldset>
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" placeholder="masukan username" id="username" name="username" required >
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control"  placeholder="Masukan Password" id="password" name="password" required >
				      </div>
				    </div>
				    <div class="form-group">
				    	<?php
				    		$tgl =  date('l, d-m-Y');
				    	?>
				      <label for="inputEmail" class="col-lg-2 control-label">Tanggal Lahir</label>
				      <div class="col-lg-10">
				        <input type="date" class="form-control"  placeholder="" id="" name="date">
				      </div>
				    </div>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Jumlah Transaksi per 45000</label>
					<div class="col-lg-10 col-lg-offset-2">
					<input class="form-control" type="number" name="jumlah_transaksi" id="harga_php" size="7" value="0" onchange="total()">
					</div>
				</div>
				<div class="form-group">
				 	<label for="inputEmail" class="col-lg-2 control-label">Total Transaksi</label>
				     <div class="col-lg-10 col-lg-offset-2">
					<input type="text" class="form-control"  name="total_transaksi" id="total" size="7" value="" readonly>
					</div>
				</div>
				    <div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				        <input readonly type="submit" name="simpan" class="btn btn-primary" value="simpan">
				      </div>
				    </div>
				  </fieldset>
				<!-- </form> --> 
		      </div>
		    </div>
		  </div>
		  </div>
		</div>
		</div>
</body>



		<script type="text/javascript">
		function total() {
		// var valgoritma = 75000 * parseInt(document.getElementById('harga_algoritma').value);
		// var vjavascript = 45000 * parseInt(document.getElementById('harga_javascript').value);
		var vphp = 90000 * parseInt(document.getElementById('harga_php').value);

		var jumlah_harga = 0 + vphp;

		document.getElementById('total').value = jumlah_harga;
		}
		
		</script>
		</script>
		<script type="text/javascript">
		$('#tambah').click(function(){
		$('#myModal').modal('show'); 
		});

		  </script>
	</div>
</body>
</html>

<!-- <br><br>
		<input type="button" onclick="window.print()" value="cetak"> -->