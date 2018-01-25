<?php 
include("ImgBlob.php");

$img_str = file_get_contents('img.jpg');
$width   = 640;
$height  = 480;
$aspect  = 'fixed';
$format  = 'png';
$mime    = ($format==='png') ? 'image/png' : 'image/jpeg';


header("Content-type: ".$mime);
// !!! no cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


$Img = new ImgBlob($img_str, $width, $height, $aspect, $format);
$Img->show();
