<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>3</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
	global $PHP_SELF,$name, $sec_name, $fam, $date, $city, $ok; 
?>
<body>
<form action="<?php echo $PHP_SELF ?>" method="GET">
	<header >
	    <h1>Лабораторная работа №3</h1>
	</header>
  <p>Имя</p><input type="text" name="name" size="5" value="<?php echo $name ?>">
  <p>Фамилия</p><input type="text" name="sec_name" size="5" value="<?php echo $sec_name ?>">
  <p>Отчество</p><input type="text" name="fam" size="5" value="<?php echo $fam ?>">
  <p>Дата рождения</p><input type="date" name="date" size="5" value="<?php echo $date ?>">
  <p>Город</p><input type="text" name="city" size="5" value="<?php echo $city ?>">
  <input type="submit" name="ok" value="OK">
</form>
<?php
$arr = array("Имя"=>"$_GET[name]",
"Фамилия"=>"$_GET[sec_name]",
"Отчество"=>"$_GET[fam]",
"ДР"=>"$_GET[date]",
"Город"=>"$_GET[city]");
foreach ($arr as $key => $value ) {
	echo "<dt>$key:</dt>";
	echo "<dd>$value</dd>";
}
?>
</body>
</html>