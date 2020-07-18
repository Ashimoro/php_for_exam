<?php

$arr = arr();

$zagolovok = array('Товар','Цена', 'Количество', 'Категория');
echo "<table border = '1px' cellspacing='0' cellpadding='5'><tr>";
			
	foreach($zagolovok as $value) {
	echo "<td> <b>$value</b> </td>";
	}
	echo "</tr>";
			
?>