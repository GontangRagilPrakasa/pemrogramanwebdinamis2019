<?php 
		//ambil dari index.php
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
		    while($data=mysqli_fetch_array($query)){
			//json array
			$datajson[] = array(
				//disesuaikan dengan field database masing masing
				"nim" => $data['nim'],
				"username" => $data['username'],
				"email" => $data['email'],
				"jenis_kelamin" => $data['jenis_kelamin'],
				"alamat" => $data['alamat'],
				"asal" => $data['asal'],
				"ttl" => $data['ttl']
			);
		    }
			// $json = array(
			// 	'result' => 'success',
			// 	'data' => $datajson   
            // echo json_encode($json);
            
            //mengenconde data menjadi json
            $jsonfile = json_encode($datajson, JSON_PRETTY_PRINT);
            //menyimpan data ke dalam anggota.json
			$simpan = file_put_contents('mahasiswa.json', $jsonfile);
			// if($simpan){
			// 	header('location:index.php');
			// }
		  }
		  
		  ?>