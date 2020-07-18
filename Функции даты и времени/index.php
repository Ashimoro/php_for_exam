<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>6</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
	global $PHP_SELF,$a, $b, $c, $x, $ok, $s;
?>
<body>
<form action="<?php echo $PHP_SELF ?>" method="GET">
	<header >
	    <h1>Лабораторная работа</h1>
	</header>
	<fieldset>
	<input type="date" name="date" size="6" value="<?php echo $date ?>">
	<input type="submit" name="ok" value="OK">
	<?php
	ini_set('display_errors','On');
	error_reporting('E_ALL');
	global $date_post,$date_now,$result;
	echo "<br>Сегодня: ".$date_now = date("Y/m/d");
	echo "<br>Товар поступит: ".$date_post = $_GET['date'];
	ini_set('display_errors','Off');
    function GetTime($date1 , $date2){
	    $datetime1 = new DateTime($date1);
	    $datetime2 = new DateTime($date2);
	    $interval = $datetime1->diff($datetime2); 
	    #нужный формат :
	   return $interval->format('%Y-%m-%d');
 	}
 	echo "<br>Товар поступит через: ".GetTime($date_now,$date_post);
	?>
</fieldset>
</form>
</body>
</html>

<!-- 	    $interval = $datetime1->diff($datetime2); 
	    #нужный формат :
	    $month = $interval->format('%m');
	    //$week = $interval->format('%n');
	    $day = $interval->format('%d');
	    echo"<br>".($day % 7);
	    $week = ($day - ($day % 7)) / 7; -->