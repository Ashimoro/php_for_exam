<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Название сайта</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST">
<nav  ><a href="otdel.php">Отделы</a> | <a href="tovar.php">Товары</a> |
<a href="personal.php">Персонал</a> | <a href="sklad.php">Склад</a> | <a href="prod.php">Продажи</a>
| <a href="postav.php">Поставщик</a>| <a href="client.php">Клиенты</a></nav>
<header >
    <h1>Задание по MySQL</h1>
</header>
<table>
<tr>
<td>
<article >
	
<table>
<tr>
<td>
 <section>
 Тема <br>   <input type="text" name="theme"><br><br>
 id_Картины<br> <input type="number" name="id_paint"><br><br>
 Дата выставки  <br><input type="date" name="date_p"><br><br>
 Срок  <br><input type="text" name="srok"><br><br>
 id_Зала <br><input type="number" name="id_hall"><br><br>
 </section>
</td>
</tr>
</table>


<td>
<section >
<table id="table1" border="1">
<tr>
<td>id</td>
<td>Тема</td>
<td>id_Картины</td>
<td>Дата выставки</td>
<td>Срок</td>
<td>id_Зала</td>
</tr>

</table>
</section>
</td>
    
   
</article>
</td>
<td>
<aside >
 <p><input type="submit" value="Добавить" name="calculate"></p>

  </aside>
</td>
</tr>
</table>
<footer >
  <h4><a href="../index.php">Вернуться в меню</a></br></h4>
</footer>
</fieldset>



</form>
</body>
</html>