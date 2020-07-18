<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>5</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
ini_set('display_errors','On');
error_reporting('E_ALL');
	global $PHP_SELF,$a, $b, $c, $x, $ok, $s;
?>
<body>
<form action="<?php echo $PHP_SELF ?>" method="GET">
  <header >
      <h1>Лабораторная работа</h1>
  </header>
   <p><select name="image"> 
    <option disabled selected>Выберите пункт</option> 
    <option value="image1">Картина №1</option>
    <option value="image2">Картина №2</option>
    <option value="image3">Картина №3</option>
    <option value="image4">Картина №4</option>
    <option value="image5">Картина №5</option>
   </select></p>
   <p><input type="submit" value="Ок"></p>
</form>
<?php
//global $src;
class Images
{
	private $name;
	private $date;
	private $description;
	private $src;
  public function __construct($name,$date,$description,$src)
  {
      $this->name = $name;
      $this->date = $date;
      $this->description = $description;
      $this->src = $src;
  }  
  public function get(){
  	echo $this->name;
  	echo '<br>'.$this->date;
  	echo '<br>'.$this->description;
  }
}

if ($_GET['image'] == @image1) {
	$images1 = new Images('Мона Лиза','11.23.3232','Изображена женщина','1.jpg');
	$src = '1.jpg';
	$images1 -> get();
}
if ($_GET['image'] == @image2) {
	$images2 = new Images('Благовещение','11.23.3232','Изображено благовещение','2.jpg');
	$src = '2.jpg';
	$images2 -> get();
}
if ($_GET['image'] == @image3) {
	$images3 = new Images('Дама с горностаем','11.23.3232','Изображена дама с горностаем','3.jpg');
	$src = '3.jpg';
	$images3 -> get();
}
if ($_GET['image'] == @image4) {
	$images4 = new Images('Мадонна с младенцем','11.23.3232','Изображена Мадонна с младенцем','4.jpg');
	$src = '4.jpg';
	$images4 -> get();
}
if ($_GET['image'] == @image5) {
	$images5 = new Images('Мадонна Литта','11.23.3232','Изображена Мадонна Литта','5.jpg');
	$src = '5.jpg';
	$images5 -> get();
}
ini_set('display_errors','Off');
?>
   <p>
   	<img src="<?php echo $src; ?>" width="200" height="200">
   </p>
</body>
</html>