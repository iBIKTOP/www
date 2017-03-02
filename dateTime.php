<?php
	$start = microtime(true);// запишет в переменную сколько сейчас секунд и милисекунд в правильном виде
	echo time ()."<br>";//секунд от 01.01.1970
	echo microtime()."<br>";//милисекунды и секунды
	
	echo microtime(true)-$start;//покажет сколько милисекунд в -5 степени потрачено на выполнение этого скрипта
	echo "<br>";
	echo date("Y-m-d H:i:s");//http://php.net/manual/ru/function.date.php
	$time=mktime(12,35,23,12,7,2007);//H:i:s d-m-Y, занесет сколько секунд прошло с этой даты
	echo "<br>".$time."<br>";
	$arr = getdate($time);//getdate разобъет и создаст массив времени
	print_r ($arr);
	echo "<br>";
	echo checkdate(3, 28, 2016);//проверяет существует ли этот день
?>