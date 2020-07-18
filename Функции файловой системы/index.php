<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>6</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="index.php" method="get">
<select size="1" name="category"> 
	<option value="myaso">Мясо</option>
	<option value="hleb">Хлеб</option>
	<option value="all">Всё</option>
</select>
<input type="submit" value="Просмотреть" />
</form>
</body>

<?php
ini_set('display_errors','On');
error_reporting('E_ALL');

function arr(){

$file = file("ff.txt"); 
$arraykey = array('tovar', 'cost', 'count', 'category'); 
	for ($i=0; $i < count($file); $i++){ 
	
		$arr[$i]=explode("|", $file[$i]); 
		$arr[$i] = array_combine($arraykey, $arr[$i]);   
	}
	
	return $arr; 
}


function publication (){
	
if ($_GET['category'] == 'myaso'){  
	include ('zagolovok.php');			   

	for($i = 0; $i < count($arr); $i++){ 
				
		foreach ($arr[$i] as $value) 
				
		echo "<tr>"; 
					
			if ($value == 1){ 
						
			$arr[$i]['category'] = 'Мясо';
						
				foreach ($arr[$i] as $value){ 
							
				echo "<td>$value</td>"; 
				}
			}
				echo "</tr>";  
					
	}
				echo "</table>"; 
}

  
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
ini_set('display_errors','Off');
