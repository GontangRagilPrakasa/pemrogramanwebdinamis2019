<?php session_start(); 
$random_alpha = md5(rand());  //acak captcha
$captcha_code = substr($random_alpha, 0, 6);  //ang digunakan untuk memotong string atau mengambil sebagian nilai dari sebuah string di dalam PHP.
$_SESSION["captcha_code"] = $captcha_code; 
$target_layer = imagecreatetruecolor(70,30); //bermanfaat jika Anda tidak memiliki sumber gambar asli yang ingin Anda manipulasi parameter (width and height)
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119); //ntuk menseting gambar background yang ada di captch
imagefill($target_layer,0,0,$captcha_background); 
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); 
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color); 
header("Content-type: image/jpeg"); //menalokasikan file captcha
imagejpeg($target_layer);
 ?>