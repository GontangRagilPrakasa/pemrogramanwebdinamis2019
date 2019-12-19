<!DOCTYPE>
<html>
<head>
	<title>validasi</title>
</head>
<body>
	<table>
		<form action="" method="" onsubmit="return validasi(this)">
			<tr>
				<td>NIM :</td>
				<td>
					<input type="text" name="nim">
				</td>
			</tr>
			<tr>
				<td>Asal :</td>
				<td>
					<input type="text" name="asal">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="simpan" value="tambahkan">
				</td>
			</tr>
		</form>
	</table>
	<script type="text/javascript">
		function validasi(form){
			pola_nim=/^[0-9]+$/;
			if(!pola_nim.test(form.nim.value)){
				alert("NIM harus angka!!");
				form.nim.focus();
				return (false);
			}
			if(form.asal.value == ""){
				alert("asal tidak boleh kosong");
				form.nim.focus();
				return (false);
			}
			return (true);
		}
	</script>
</body>
</html>