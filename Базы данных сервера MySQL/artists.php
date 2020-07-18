<?php
$host = 'localhost';
$db_name = 'gallery';
$db_user = 'root';
$db_pass = 'qwerty';
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
$data=[];
if (isset($_POST['input']))
{
	$sql="insert into artists(`second_name`,`name`,`otchestvo`,`sex`,`birthday`,`oklad`,`adress`,`phone`)
	values('".$_POST['second_name']."','".$_POST['name']."','".$_POST['otchestvo']."','".$_POST['sex']."','".$_POST['birthday']."','".$_POST['oklad']."','".$_POST['adress']."','".$_POST['phone']."')";
	mysqli_query($mysqli, $sql);
}
if ($result = $mysqli->query("Select * from artists")) {

    while ($obj = $result->fetch_array()) {
       
		$data[]=$obj;
    }
	
    $result->close();
}
$table="";
for ($i=0;$i<count($data);$i=$i+1)
{
	$table.="<tr><td>";
	$table.=$data[$i][0];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][1];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][2];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][3];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][4];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][5];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][6];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][7];
	$table.="</td>";
	$table.="<td>";
	$table.=$data[$i][8];
	$table.="</td>";
	$table.="</tr>";
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Название сайта</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST">
	<header >
	    <h1>Задание по MySQL</h1>
	</header>
	<div id="div0">
		<ul class="push">
		  <li><a href="artists.php">Художники</a></li>
		  <li><a href="manager.php">Менеджеры</a></li>
		  <li><a href="hall.php">Зал</a></li>
		  <li><a href="paintings.php">Картины</a></li>
		  <li><a href="contracts.php">Контракты</a></li>
	  	  <li><a href="exibition.php">Выставки</a></li>
	    </ul>
	</div>

	<div id="main_div" style="overflow: hidden;display:inline-block;margin-left: 30px;">
		<div id="div1" style="overflow: auto;float: left;">
			 <p>Фамилия</p><input type="text" name="second_name">
			 <p>Имя</p><input type="text" name="name">
			 <p>Отчество</p><input type="text" name="otchestvo">
			 <p>Пол</p><input type="text" name="sex">
			 <p>Дата рождения</p><input type="date" name="birthday">
			 <p>Гонорар</p><input type="number" name="oklad">
			 <p>Адрес</p><input type="text" name="adress">
			 <p>Телефон</p><input type="text" name="phone">
			 <p><input type="submit" value="Добавить" name="input"></p>
		</div>

		<div id="div2">
			<table class="child" border="1">
				<tr>
					<td>id</td>
					<td>Фамилия</td>
					<td>Имя</td>
					<td>Отчество</td>
					<td>Пол</td>
					<td>Дата рождения</td>
					<td>Гонорар</td>
					<td>Адрес</td>
					<td>Телефон</td>
				</tr>
				<?php echo "$table"?>
			</table>
		</div>
	</div>

</form>
</body>
</html>