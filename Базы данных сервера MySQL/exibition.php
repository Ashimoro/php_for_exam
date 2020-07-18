<?php
$host = 'localhost';
$db_name = 'gallery';
$db_user = 'root';
$db_pass = 'qwerty';
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
$data=[];
if (isset($_POST['input']))
{
	$sql="insert into exibition(`theme`,`id_paint`,`date_p`,`srok`,`id_hall`)
	values('".$_POST['theme']."','".$_POST['id_paint']."','".$_POST['date_p']."','".$_POST['srok']."','".$_POST['id_hall']."')";
	mysqli_query($mysqli, $sql);
}
if ($result = $mysqli->query("Select * from exibition")) {

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
			 <p>Тема</p> <input type="text" name="theme">
			 <p>id_Картины</p><input type="number" name="id_paint">
			 <p>Дата выставки</p><input type="date" name="date_p">
			 <p>Срок</p><input type="text" name="srok">
			 <p>id_Зала</p><input type="number" name="id_hall">
			 <p><input type="submit" value="Добавить" name="input"></p>
		</div>

 		<div id="div2">
			<table class="child" border="1">
				<tr>
					<td>id</td>
					<td>Тема</td>
					<td>id_Картины</td>
					<td>Дата выставки</td>
					<td>Срок</td>
					<td>id_Зала</td>
				</tr>
				<?php echo "$table"?>
			</table>
		</div>
	</div>

</form>
</body>
</html>
