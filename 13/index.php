<?php
 date_default_timezone_set('Asia/Vladivostok');
//массив посещений
 $visites = array(188,235,360,560,900,720,240,400,1263,400,597,468);
 $width = 450;  $height = 400; 
 $img = ImageCreate($width, $height);
 $fon_color = ImageColorAllocate ($img, 200, 200, 200); 
 $line_color = ImageColoralLocate($img, 213, 81, 209);
 ImageLine($img,5,$height-15,$width-15,$height-15,$line_color);
 //выводим порядковый номер каждого из 12 месяцев 
 for ($month=1; $month<=12; $month++) 
 { 
   ImageString ($img, 2, $month*30, $height-15, $month, $line_color); 
 }
//проводим вертикальную линию, чтобы ось ординат (число посещений) 
ImageLine ($img, 10, 10, 10, $height-10, $line_color);
//максимум посещений 
$visitesMax = 1400; 
//рисуем палочки 
for ($month=1; $month<=12; $month++) 
{ 
  $rect=round(($visites[$month-1]*$height)/$visitesMax);
  $gis_color = ImageColorAllocate ($img, 81, 100, 210); 
  ImageFilledRectangle($img,$month*30-7,$height-$rect,$month*30+7, $height-16, $gis_color); 
  ImageString ($img, 2,$month*30-7,$height-$rect-16,$visites[$month-1], $line_color); 
} 
//вот и все 
imagepng($img); ?>

<?php 
header("Content-type: image/png"); 
$width = 450; 
$height = 400; 
$img = ImageCreate ($width, $height) or 
die("Ошибка при создании изображения"); 
$couleur_fond = ImageColorAllocate ($img, 200, 200, 200); 
ImagePng($img); 
?>
