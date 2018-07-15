<?php
$im1 = imagecreatefrompng("gb1.png");
$im2 = imagecreatefrompng("gb2.png");
$im3 = imagecreatefrompng("gb3.png");
$im4 = imagecreatefrompng("gb4.png");
$im5 = imagecreatefrompng("gb5.png");
$im7 = imagecreatefrompng("gb7.png");
// imagefilter($im1, IMG_FILTER_GRAYSCALE);
// imagefilter($im2, IMG_FILTER_GRAYSCALE);
// imagefilter($im3, IMG_FILTER_GRAYSCALE);
// imagefilter($im4, IMG_FILTER_GRAYSCALE);
// imagefilter($im5, IMG_FILTER_GRAYSCALE);
// imagefilter($im7, IMG_FILTER_GRAYSCALE);
for ($y = 0; $y <32; $y++) { 
       for ($x = 0; $x <32; $x++) { 
$rgb1 = imagecolorat($im1, $x, $y);
$rgb2 = imagecolorat($im2, $x, $y);
$rgb3 = imagecolorat($im3, $x, $y);
$rgb4 = imagecolorat($im4, $x, $y);
$rgb5 = imagecolorat($im5, $x, $y);
$rgb7 = imagecolorat($im7, $x, $y);


$r1 = ($rgb1 >> 16) & 0xFF;
$g1 = ($rgb1 >> 8) & 0xFF;
$b1 = $rgb1 & 0xFF;

$r2 = ($rgb2 >> 16) & 0xFF;
$g2 = ($rgb2 >> 8) & 0xFF;
$b2 = $rgb2 & 0xFF;

$r3 = ($rgb3 >> 16) & 0xFF;
$g3 = ($rgb3 >> 8) & 0xFF;
$b3 = $rgb3 & 0xFF;

$r4 = ($rgb4 >> 16) & 0xFF;
$g4 = ($rgb4 >> 8) & 0xFF;
$b4 = $rgb4 & 0xFF;

$r5 = ($rgb5 >> 16) & 0xFF;
$g5 = ($rgb5 >> 8) & 0xFF;
$b5 = $rgb5 & 0xFF;

$r7 = ($rgb7 >> 16) & 0xFF;
$g7 = ($rgb7 >> 8) & 0xFF;
$b7 = $rgb7 & 0xFF;

$gray1 = round(.299*$r1 + .587*$g1 + .114*$b1);
$gray2 = round(.299*$r2 + .587*$g2 + .114*$b2);
$gray3 = round(.299*$r3 + .587*$g3 + .114*$b3);

$gray4 = round(.299*$r4 + .587*$g4 + .114*$b4);
$gray5 = round(.299*$r5 + .587*$g5 + .114*$b5);
$gray7 = round(.299*$r7 + .587*$g7 + .114*$b7);
// echo($gray1.",".$gray2.",".$gray3.",".$gray4.",".$gray5.",".$gray7);
echo ($rgb1.",".$rgb2.",".$rgb3.",".$rgb4.",".$rgb5.",".$rgb7);
echo("<br/>");
// echo "END";
// echo("<br/>");
// echo($gray1);
//$result =$gray2.",".$gray3.",".$gray4.",".$gray5.",".$gray7;

}
}

