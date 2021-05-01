<?php
header("Content-type : image/png"); //무조건 맨 위에 써야함! 안쓰면 오류남.
$string = $_GET['text'];
$im = imagecreatefrompng("button.png");
$orange=imagecolorallocate($im, 60, 87, 156);
$px = (imagesx($im) - (7.5 * strlen($string))) / 2;
imagestring($im, 4, $px, 9, $string, $orange);
imagepng($im);
imagedestroy($im);
?>