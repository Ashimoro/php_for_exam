<!DOCTYPE HTML>
<html>
<head>
  <title>get</title>
  <meta charset="utf-8">
</head>
<?php
	global $PHP_SELF,$a, $b, $x, $ok, $s; 
?>
<body>
<form action="<?php echo $PHP_SELF ?>" method="GET">
  <input type="text" name="a" size="3" value="<?php echo $a ?>">
  <input type="text" name="b" size="3" value="<?php echo $b ?>">
  <input type="submit" name="ok" value="OK">
</form>
<?php
  $x = rand(-10,10);
  echo "x = ".$x;
  //$s=(sin($_GET['c'] * pi()) * exp(-cos($x)))/(abs(cos($_GET['b'])) * $_GET['a']);
  $s=(abs(cos($x/pi()))*$_GET['a'])/exp(-sin(pi()/$_GET['b']));
  echo "<br/>f1 = ".$s;
?>
</body>
</html>