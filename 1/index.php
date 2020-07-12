<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>1</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
  global $PHP_SELF,$a, $b, $c, $x, $ok, $s;
  ?>
<form action="<?php echo $PHP_SELF ?>" method="GET">
  <header >
      <h1>Лабораторная работа №1</h1>
  </header>

  <input type="text" name="a" size="3" value="<?php echo $a ?>">
  <input type="text" name="b" size="3" value="<?php echo $b ?>">
  <input type="text" name="c" size="3" value="<?php echo $c ?>">
  <input type="text" name="x" size="3" value="<?php echo $x ?>">
  <input type="submit" name="ok" value="OK">

</form>
<?php
  //$s=$_GET['a']+$_GET['b'];
  $s=(($_GET['a']-$_GET['b'])/$_GET['x'])/($_GET['c']/$_GET['a']);
  echo "s = ".$s;
?>
</body>
</html>