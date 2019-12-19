<?php

		include('fpdf/fpdf.php');
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);

		$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');
		
		$pdf->SetFillColor(255,100,100);
		$pdf->SetDrawColor(128,0,0);
		$pdf->Cell(10,7,'',0,1);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(30,6,'NIM',1,0);
		$pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
		$pdf->Cell(25,6,'J KEL',1,0);
		$pdf->Cell(30,6,'ALAMAT',1,0);
		$pdf->Cell(50,6,'EMAIL',1,1);
		$pdf->SetFont('Arial','',10);
		include 'koneksi.php';
		$mahasiswa = mysqli_query($konek, "select * from
		pwd2");
		while ($row = mysqli_fetch_array($mahasiswa)){
		$pdf->SetTextColor(255,0,0);
		 $pdf->Cell(30,6,$row['nim'],1,0);
		 $pdf->Cell(50,6,$row['username'],1,0);
		 $pdf->Cell(25,6,$row['jenis_kelamin'],1,0);
		$pdf->Cell(30,6,$row['alamat'],1,0);
		 $pdf->Cell(50,6,$row['email'],1,1);
		}


		$pdf->Output();

?>