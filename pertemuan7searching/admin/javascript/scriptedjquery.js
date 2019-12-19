$(document).ready(function(){
	$('#tombol-cari').hide();
	$('#keyword').on('keyup', function(){
		//munculkan icon loading
		$('.loader').show();
		// $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

		//$.get()
		$.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){
			$('#container').html(data);
			$('.loader').hide();
		});

	});
});
// var keyword = document.getElementById('keyword');
// keyword.addEventListener('keyup', function(){
// 	console.log('ok');
// });
