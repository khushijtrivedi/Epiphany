<?php
	session_start(); 
	$text = rand(10000,99999); 
	$_SESSION["captcha"] = $text; 
	$height = 25; 
	$width = 65;   
	
	$image_p = imagecreatetruecolor($width, $height); 

	 
	$black = imagecolorallocate($image_p, 0, 0, 0); 
	imagefill($image_p,0,0,$black);
	 
	$white = imagecolorallocate($image_p, 255, 255, 255); 
	$font_size = 14; 

	
	imagestring($image_p, $font_size, 5, 5, $text, $white); 
	header('Content-Type:jpeg');
	imagejpeg($image_p);
?>