<?php
if($_POST) {
	# TOMBOL PILIH (KODE barang) DIKLIK
	if(isset($_POST['btnPilih'])){
		$message = array();
		if (trim($_POST['cmbKodeBarang'])=="") {
			$message[] = "<b>Kode Barang belum diisi</b>, ketik secara manual atau dari barcode reader !";		
		}
		if (trim($_POST['txtHargaBeli'])=="" OR ! is_numeric(trim($_POST['txtHargaBeli']))) {
			$message[] = "Data <b>Harga Beli belum diisi</b>, silahkan <b>isi dengan nominal uang</b> !";		
		}
		if (trim($_POST['txtJumlah'])=="" OR ! is_numeric(trim($_POST['txtJumlah']))) {
			$message[] = "Data <b>Jumlah barang (Qty) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
		}
		
 
		$cmbKodeBarang	= $_POST['cmbKodeBarang'];
		$cmbKodeBarang	= str_replace("'","&acute;",$cmbKodeBarang);
		$txtHargaBeli = $_POST['txtHargaBeli'];
		$txtHargaBeli = str_replace("'","&acute;",$txtHargaBeli);
		$txtHargaBeli = str_replace(".","",$txtHargaBeli);
		$txtJumlah	= $_POST['txtJumlah'];
		$txtJumlah	= str_replace("'","&acute;",$txtJumlah);
		$txtSubtotal	= $_POST['txtSubtotal'];
		$txtSubtotal	= str_replace("'","&acute;",$txtSubtotal);
	
		?>
	
</script>	
<form action="?page=Pembelian-Barang" method="post"  name="frmadd">
<table width="750" cellspacing="1" class="table-common" style="margin-top:0px;">
 
	<h1 align="left"><b>TRANSAKSI PEMBELIAN BARANG</b></h1> 
	<tr>
	  <td><b>Kode Barang</b></td>
	  <td><b>:</b></td>
	  <td><select name="cmbKodeBarang">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT * FROM barang ORDER BY kd_barang";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kd_barang']== $_POST['cmbKodeBarang']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[kd_barang]' $cek>$dataRow[kd_barang] ( $dataRow[nm_barang] )</option>";
		
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
	<tr>
      <td><b>Harga beli (Rp)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtHargaBeli" class="angkaR"  size="14" maxlength="11" />
 
	  <b>  Qty :
		<input class="angkaC" name="txtJumlah" size="4" maxlength="11" value="1" 
					 onblur="if (value == '') {value = '1'}" 
					 onfocus="if (value == '1') {value =''}" />					 
					 
	<?php 
		$txtSubtotal = $_POST['txtHargaBeli'] * $_POST['txtJumlah'];
	?>
 // bagaimana menampilkan hasil kali harga beli * jumlah di subtotal secara otomatis
		 Subtotal :	
			<input name="txtSubtotal" value="<?php echo "$txtSubtotal";?>" size="8" maxlength="11"/>
  	
		<input name="btnPilih" type="submit" style="cursor:pointer;" value=" ADD ITEM " class="formbutton"/>
      </b></td>
    </tr>
	
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input name="btnSave" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI "  class="formbutton"/></td>
    </tr>
</table>