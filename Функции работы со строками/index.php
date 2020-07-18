
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>4</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header >
	    <h1>Лабораторная работа</h1>
	</header>
<?php
function ucfirst_utf8($str)
{
    return mb_substr(mb_strtoupper($str, 'utf-8'), 0, 1, 'utf-8') . mb_substr($str, 1, mb_strlen($str)-1, 'utf-8');
}
?>
<p>
	<strong>Вариант:8<br></strong>
</p>
<p>
	<strong>Задание:Строку «солнечныйкругнебовокруг» разбить на два предложения,<br> первую букву каждого сделать строчной и перенести на следующую строку.<br> В нужных местах поставить пробелы. Вывести номер варианта, задание, первоначальную строку и обработанную<br><br></strong>
</p>
<?php
$text = "солнечный\tкруг<br>\nнебо\tвокруг";
$r="\n";
$tok = strtok($text, $r);
while ($tok) {
	echo ucfirst_utf8($tok);
	$tok = strtok($r);
}
?>
</body>
</html>