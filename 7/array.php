<!-- 
Создаем форму с выпадающим списком и переменной "status"
c выбором значений (yes,not,all) переменной из списка 
-->
<form action="array.php" method="get">
<select size="1" name="category"> 
	<option value="myaso">Мясо</option>
	<option value="hleb">Хлеб</option>
	<option value="all">Всё</option>
</select>
<input type="submit" value="Просмотреть" />
</form>

<?php

function arr(){

$file = file("ff.txt"); //Заносим строки из файла в массив 
$arraykey = array('tovar', 'cost', 'count', 'category'); //Создаем массив для ключей многомерного массива
	for ($i=0; $i < count($file); $i++){ //Делаем цикл, где count($file) выдает кол-во эллементов массива $file
	
		$arr[$i]=explode("|", $file[$i]); // В цикле создаем нов. массив, уже многомерный.
		$arr[$i] = array_combine($arraykey, $arr[$i]);  //Комбинируем массивы $arraykey, $arr[$i] и получаем ассоциативные массивы  
	}
	
	return $arr; //Возвращаем функции arr() наш многомерный массив
}


function publication (){
	
if ($_GET['category'] == 'myaso'){  
	include ('zagolovok.php'); //Вставляем повторяющийся кусок кода из файла zagolovok.php			   

	for($i = 0; $i < count($arr); $i++){ //Делаем цикл, где count($arr) выдает кол-во эллементов массива $arr
				
		foreach ($arr[$i] as $value) //Делаем цикл, который будет проходить по значениям ассоциативных массивов 
				
		echo "<tr>"; //Открываем строку в таблице
					
			if ($value == 1){ //Если значение ассоциативного массива равно 1, то
						
			$arr[$i]['category'] = 'Мясо'; //Меняем значение $arr[$i]['status']=1 на значение 'Опубликованно'
						
				foreach ($arr[$i] as $value){ //Бежим опять по значениям ассоциативного массива, но только со статусом 'Опубликованно'
							
				echo "<td>$value</td>"; //Выводим значения ассоциативного массива в столбце
				}
			}
				echo "</tr>";  //Закрываем строку в таблице
					
	}
				echo "</table>"; //Закрываем в таблицу
}

/**
* Дальше комментировать не буду все аналогично выше описанному
*/
  
if ($_GET['category'] == 'hleb'){
			
	include ('zagolovok.php'); 
				
	for($i = 0; $i < count($arr); $i++){
				
		foreach ($arr[$i] as $value)
				
		echo "<tr>";
					
			if ($value == 2){
						
			$arr[$i]['category'] = 'Хлеб';
						
				foreach ($arr[$i] as $value){ 
							
				echo "<td>$value</td>";
				}
			}
				echo "</tr>";	
					
	}
				echo "</table>";
} 
 
}

function output (){
		
if ($_GET['category'] == 'all'){
		
	include ('zagolovok.php'); 
	
	for($i = 0; $i < count($arr); $i++){
			
	echo "</tr>"; 
			
		foreach ($arr[$i] as $value){
			
			if ($value == 1){
					
			$arr[$i]['category'] = 'Мясо';	
			}	
				
			if ($value == 2){
					
			$arr[$i]['category'] = 'Хлеб';	
					
			}
		}			
				foreach ($arr[$i] as $value){
				
				echo "<td> $value </td>";
				
				
				}
				echo "</tr>";
	}
				echo "</table>";	   
}
}   

publication();
output();
