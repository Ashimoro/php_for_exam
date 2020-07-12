<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Название сайта</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="<?php echo $PHP_SELF ?>" method="GET">
	<header >
	    <h1>Лабораторная работа №8</h1>
	</header>
<fieldset>
<?php
echo"Массив: ";
$n = rand(2,10);
$sum = 0;
$k = 0;
for($i=0; $i<$n; $i++) {
	$arr[$i] = (rand(0,25) - 15);
	echo "<br>".$arr[$i];
	if ($arr[$i] < 0) {
		$sum++;
		if ($sum > $k){
			$k = $sum;
		}
	}else {
		$sum = 0;
	}
}
echo"<br> Максимальное колво подряд идущих отрацательных чисел: ".($k);
echo"<br>";
print_r($arr);
?>
</fieldset>
</form>
</body>
</html>
