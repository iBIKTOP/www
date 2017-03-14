<?php
	function printresult($result_set){
		/*	1) передаем в функцию всю нашу БД с помощью $result_set
			2) в цыкле делаем проверку. $result_set->fetch_assoc() проверяет есть ли строка и передает ее в переменную $row в виде ассиативного массива
			3) если $row не пустой, т.е. != false, то запускается выполнение цыкла
			4) когда перебрали все строки используем еще одну функцию $result_set->num_rows которая показывает сколько строк в БД
		*/
		while(($row = $result_set->fetch_assoc()) != false){
			print_r($row);
			//echo $row['login'];//повыводит только все логины
			echo "<br>";
		}
		echo "summ rows - ".$result_set->num_rows."<br>-----------------<br>";
	}
	$mysqli = new mysqli("localhost","root","","db");
	$mysqli->query("SET NAMES 'utf8'");

	$result_set = $mysqli->query("SELECT * FROM  `users`");//можно использовать WHERE ...
	printresult($result_set);
	//выборка по ID
	$result_set = $mysqli->query("SELECT `id` FROM  `users`");//можно использовать WHERE ...
	printresult($result_set);
	//ниже сортировка по возрастанию
	$result_set = $mysqli->query("SELECT * FROM  `users` ORDER BY `id` ASC");
	printresult($result_set);
	//ниже сортировка по убыванию
	$result_set = $mysqli->query("SELECT * FROM  `users` ORDER BY `id` DESC");
	printresult($result_set);
	//ниже сортировка по убыванию c лимитом строк
	$result_set = $mysqli->query("SELECT * FROM  `users` ORDER BY `login` DESC LIMIT 0,2");
	printresult($result_set);
	//выборка по login если встречается в слове "mi"
	$result_set = $mysqli->query("SELECT * FROM  `users` WHERE `login` LIKE '%mi%'");
	printresult($result_set);
	//COUNT передаст количество ID (или строк в таблице)
	$result_set = $mysqli->query("SELECT COUNT(`id`) FROM  `users`");
	printresult($result_set);
	$mysqli->close();
?>