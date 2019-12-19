//dengan ajax
 var keyword= document.getElementById('keyword');
 var tombolCari = document.getElementById('tombol-cari');
 var container = document.getElementById('container');
//apakah tombok cari tombol berfungsi atau tidak
 // tombolCari.addEventListener('click', function(){
 // 	alert('ketemu');
 // });

//apakah keyup berfungsi atau tidak pada keyword
keyword.addEventListener('keyup', function(){
	// alert('ok');
	// console.log(keyword.value);
	//buat objek ajax
	var xhr = new XMLHttpRequest(); //instansiasi objek ajax
		//cek kesiapan ajax dari sumber untuk merespon
	xhr.onreadystatechange = function(){
		// readystate membuka jendela 0
		// readystate menjalankan koneksi 1
		// status sumbernya ada 200

		if(xhr.readyState = 4 && xhr.status == 200){
				// console.log('ajax ok!');
				//response didalam mahasiswa.txt
				//console.log(xhr.responseText);
				//ajax sudah mulai masuk pada data kita
				container.innerHTML = xhr.responseText;
		}
	}
	//eksekusi ajax
	//parameter pertama itu method dan paramter 2 itu sumber lain
	// xhr.open('GET','ajax/mahasiswa.php ', true);
	//menggunakan paramter keyword
	xhr.open('GET','ajax/mahasiswa.php?keyword=' + keyword.value, true);
	xhr.send();
});

