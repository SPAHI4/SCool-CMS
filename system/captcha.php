<?php
session_start();
include_once "classes/captcha.php";

$img_x = 70;
$img_y = 30;
$font = '../etc/fonts/font.ttf';

if(isset($_GET['reload'])){
  Captcha::reload();
}
if(!isset($_SESSION['captcha']))$_SESSION['captcha']=Captcha::generate();
$content=$_SESSION['captcha'];


$img = imagecreate($img_x, $img_y);
$colours = array();
$colours['white'] = imagecolorallocate($img, 255, 255, 255);
$colours['grey'] = imagecolorallocate($img, 230, 230, 230);
$colours['black'] = imagecolorallocate($img, 0, 0, 0);
$number_of_x_lines = ($img_x - 1) / 4;
$number_of_y_lines = ($img_y - 1) / 4;
for($i = 0; $i < $number_of_x_lines; $i++){
 imageline($img, $i * $number_of_x_lines, 0, $i * $number_of_x_lines, $img_y, $colours['grey']);}
for($i = 0; $i < $number_of_y_lines; $i++){
 imageline($img, 0, $i * $number_of_y_lines, $img_x, $i * $number_of_y_lines, $colours['grey']);}
$txt_bbox = imagettfbbox(17, 0, $font, $content);
$sx = ($img_x+25 - ($txt_bbox[2] - $txt_bbox[0]))/3;
$sy = ($img_y - ($txt_bbox[1] - $txt_bbox[7]))/3;
$sy -= $txt_bbox[7];
header('Cache-control: no-cache');
header('Content-type: image/png');
imagettftext($img, mt_rand(13, 15), mt_rand(-3, 3), $sx, $sy, $colours['black'], $font, $content);
imagepng($img);
imagedestroy($img);
?>