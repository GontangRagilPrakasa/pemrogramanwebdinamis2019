 <table>
 <form class="form-horizontal" id="form" action="tambahmahasiswa.php" method="POST" onsubmit="return validasi_input(this)">
		  <fieldset>
		  	<tr>
		  		<td>NIM :</td>
		  		<td>
		  			<input type="text" class="form-control" placeholder="masukan nim" id="nim" name="nim">
		  		</td>
		  	</tr>
		    <tr>
		  		<td>Nama Lengkap :</td>
		  		<td>
		  			<input type="text" class="form-control"  placeholder="Masukan Nama" id="username" name="username" >
		  		</td>
		  	</tr>
		   	<tr>
		  		<td>Email :</td>
		  		<td>
		  			<input type="text" class="form-control"  placeholder="Masukan Email" id="email" name="email">
		  		</td>
		  	</tr>
		    <tr>
		  		<td>Alamat :</td>
		  		<td>
		  			<input type="text" class="form-control"  placeholder="Masukan Alamat" id="alamat" name="alamat">
		  		</td>
		  	</tr>
		    <tr>
		  		<td>Jenis Kelamin:</td>
		  		<td>
		  			<select class="form-control" id="select" name="jenis_kelamin" >
			          <option value="pilih" selected>Pilih</option>
			          <option value="l">Laki laki</option>
			          <option value="p">Perempuan</option>
			        </select>
		  		</td>
		  	</tr>
		    <tr>
		  		<td>Asal :</td>
		  		<td>
		  			<input type="text" class="form-control"  placeholder="Masukan Asal" id="asal" name="asal" >
		  		</td>
		  	</tr>
		  	<?php
				$tgl =  date('l, d-m-Y');
			?>
		  	<tr>
		  		<td>Tanggal Lahir :</td>
		  		<td>
		  			 <div class="col-lg-10"><input type="date" class="form-control"  placeholder="" id="" name="ttl">
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>
		  			<input type="submit" name="simpan" class="btn btn-primary" value="Tambahkan">
		    	</td>
		    </tr>
		  </fieldset>
		</form> 
</table>
<script type="text/javascript">
			
			
			function validasi_input(form){
				pola_nim=/^[0-9]+$/;
			   	if (!pola_nim.test(form.nim.value)){
			      alert ('NIM harus diisi dan harus angka');
			      form.nim.focus();
			      return false;
			   	}

			   	pola_username=/^[a-zA-Z0-9\_\-]{6,100}$/;
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