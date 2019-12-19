<?php
	
	//create a file handler by opening the file
	//$my_file = 'counter.txt';
	//$handle = fopen($my_file, 'r');
	$myTextFileHandler = @fopen("counter.txt","r+");
	//if(filesize($my_file) > 0){

	//truncate the file to zero
	//or you could have used the write method and written nothing to it
	@ftruncate($myTextFileHandler, 0);

	//use location header to go back to index.html
	header("Location:index.php");
?>