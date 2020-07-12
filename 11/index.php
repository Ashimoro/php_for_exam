<?php
// Подключение к MySQL
$servername = "localhost"; // локалхост
$username = "root"; // имя пользователя
$password = "qwerty"; // пароль если существует

// Создание соединения
$conn = new mysqli($servername, $username, $password);
// Проверка соединения
if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}
$database = 'gallery';
// Созданние базы данных

$sql = "CREATE DATABASE gallery";
if ($conn->query($sql) === TRUE) {
$link = mysqli_connect($servername, $username, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$query ="CREATE Table Artists
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    second_name VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    otchestvo VARCHAR(20) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    birthday Date NOT NULL,
    oklad INT NOT NULL,
    adress VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));  

$query ="CREATE Table Manager
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    second_name VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    otchestvo VARCHAR(20) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    birthday Date NOT NULL,
    oklad INT NOT NULL,
    adress VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL
)"; 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

$query ="CREATE Table Hall
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    area VARCHAR(20) NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

$query ="CREATE Table Paintings
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    genre VARCHAR(20) NOT NULL,
    id_artist INT NOT NULL,
    title VARCHAR(20) NOT NULL,
    date_of_creating Date NOT NULL,
	description VARCHAR(50) NOT NULL,
	FOREIGN KEY (id_artist) REFERENCES Artists(id)
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
// ИЗМЕНИ СТРУКТУРУ КОНТРАКТА
$query ="CREATE Table Contracts 
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_paint INT NOT NULL,
    id_manager INT NOT NULL,
    date_con Date NOT NULL,
    cost INT NOT NULL,
    FOREIGN KEY(id_paint) REFERENCES Paintings(id),
    FOREIGN KEY(id_manager) REFERENCES Manager(id)
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

$query ="CREATE Table Exibition
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    theme VARCHAR(30) NOT NULL,
	id_paint INT NOT NULL,
	date_p Date NOT NULL,
	srok VARCHAR(20) NOT NULL,
	id_hall INT NOT NULL,
	FOREIGN KEY(id_paint) REFERENCES Paintings(id),
	FOREIGN KEY(id_hall) REFERENCES Hall(id)
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
mysqli_close($link); 
} 

// Закрыть подключение

$conn->close();




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
</form>
</body>
