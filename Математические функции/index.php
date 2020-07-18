<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>2</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
ini_set('display_errors','On');
error_reporting('E_ALL');
  global $PHP_SELF,$a, $b, $c, $x, $ok,$s1, $s2, $j, $k, $y; 
?>
<body>
<form action="<?php echo $PHP_SELF ?>" method="GET">
  <header>
      <h1>Лабораторная работа</h1>
  </header>
  <p><strong>ПЕРВОЕ УРАВНЕНИЕ:</strong></p>
  <div id="div0">
    <input type="text" name="a" size="3" value="<?php echo $a ?>">
    <input type="text" name="b" size="3" value="<?php echo $b ?>">
    <input type="text" name="c" size="3" value="<?php echo $c ?>">
    <input type="submit" name="ok" value="OK">
  </div>
  <?php
  $x = rand(-5,5);
  echo "x = ".$x;
  $s1=(sin($_GET['c'] * pi()) * exp(-cos($x)))/(abs(cos($_GET['b'])) * $_GET['a']);
  echo "<br/>f1 = ".$s1;
  ?>

  <p><strong>ВТОРОЕ УРАВНЕНИЕ:</strong></p>
  <div id="div0">
  <input type="text" name="j" size="3" value="<?php echo $j ?>">
  <input type="text" name="k" size="3" value="<?php echo $k ?>">
  <input type="submit" name="ok" value="OK">
  </div>
  <?php
  $y = rand(-10,10);
  echo "y = ".$y;
  $s2=(abs(cos($y/pi()))*$_GET['j'])/exp(-sin(pi()/$_GET['k']));
  echo "<br/>f1 = ".$s2;
  ini_set('display_errors','Off');
?>

</form>
</body>
</html>

