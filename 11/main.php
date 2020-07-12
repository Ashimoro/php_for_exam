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

	<ul class="push">
	  <li><a href="artists.php">Художники</a></li>
	  <li><a href="manager.php">Менеджеры</a></li>
	  <li><a href="hall.php">Зал</a></li>
	  <li><a href="contracts.php">Контракты</a></li>
	  <li><a href="exibition.php">Выставки</a></li>
	</ul>

	<div style="overflow: hidden;">
		<div style="width: 1000%;">
			<div style="float: left; width: 500px; height: 500px">
				 <p>Тема</p> <input type="text" name="theme">
				 <p>id_Картины</p><input type="number" name="id_paint">
				 <p>Дата выставки</p><input type="date" name="date_p">
				 <p>Срок</p><input type="text" name="srok">
				 <p>id_Зала</p><input type="number" name="id_hall">
				 <p><input type="submit" value="Добавить" name="input"></p>
 			</div>

	 		<div style="float: left; width: 500px; height: 500px;">
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
	</div>

</form>
</body>
</html>





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

	<ul class="push">
	  <li><a href="artists.php">Художники</a></li>
	  <li><a href="manager.php">Менеджеры</a></li>
	  <li><a href="hall.php">Зал</a></li>
	  <li><a href="contracts.php">Контракты</a></li>
	  <li><a href="exibition.php">Выставки</a></li>
	</ul>

	<div style="overflow: hidden;">
		<div style="width: 1000%;">
			<div style="float: left; width: 500px; height: 500px">
				 <p>Фамилия</p><input type="text" name="second_name">
				 <p>Имя</p><input type="text" name="name">
				 <p>Отчество</p><input type="text" name="otchestvo">
				 <p>Пол</p><input type="text" name="sex">
				 <p>Дата рождения</p><input type="date" name="birthday">
				 <p>Оклад</p><input type="number" name="oklad">
				 <p>Адрес</p><input type="text" name="adress">
				 <p>Телефон</p><input type="text" name="phone">
				 <p><input type="submit" value="Добавить" name="input"></p>
 			</div>

	 		<div style="float: left; width: 500px; height: 500px;">
				<table class="child" border="1">
					<tr>
						<td>id</td>
						<td>Фамилия</td>
						<td>Имя</td>
						<td>Отчество</td>
						<td>Пол</td>
						<td>Дата рождения</td>
						<td>Оклад</td>
						<td>Адрес</td>
						<td>Телефон</td>
					</tr>
					<?php echo "$table"?>
				</table>
			</div>
		</div>
	</div>

</form>
</body>
</html>




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
			 <p>Жанр</p><input type="text" name="genre">
			 <p>id_Художника</p><input type="number" name="id_artist">
			 <p>Название</p><input type="text" name="title">
			 <p>Дата написания</p><input type="date" name="date_of_creating">
			 <p>Описание</p><input type="text" name="description">
			 <p><input type="submit" value="Добавить" name="input"></p>
		</div>

		<div id="div2">
			<table class="child" border="1">
				<tr>
					<td>id</td>
					<td>Жанр</td>
					<td>id_Художника</td>
					<td>Название картины</td>
					<td>Дата написания</td>
					<td>Описание</td>
				</tr>
				<?php echo "$table"?>
			</table>
		</div>
	</div>

</form>
</body>
</html>