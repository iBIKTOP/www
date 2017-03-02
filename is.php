<?php
	$x=15;
	if (isset($x)) echo "True";//isset проверяет на существование переменной
	else echo "False";
	echo "<br>";
	unset($x);//удаляет переменную и ее значение,часто приминяется в массивах
	if (isset($x)) echo "True";//isset проверяет на существование переменной
	else echo "False";
	echo "<hr>";

	$x="15";
	$bool=false;
	$null;
	echo "Is numeric - ".is_numeric($x)."<br>";
	//проверяет число ли это даже если оно записано как чтрока и выводит true
	echo "Is Integer - ".is_integer($x)."<br>";
	//проверяет является ли $x числом
	echo "Is Double - ".is_double($x)."<br>";
	//проверяет является ли $x числом с точкой
	echo "Is String - ".is_string($x)."<br>";
	//проверяет является ли $x строкой
	echo "Is Boolean - ".is_bool($bool)."<br>";
	//проверяет является ли $x true
	echo "Is Scalar - ".is_scalar($bool)."<br>";
	//проверяет простая ли это переменная, если будет то ли массив то ли объект то выведет false
	echo "Is null - ".is_null($null)."<br>";
	//проверяет есть ли у переменной какоето значение
	echo "Is array - ".is_array($x)."<br>";
	//проверка на массив
	echo "Type - ".gettype($x)."<br>";
	//выводит на экран тип переменной
	echo "Type - ".gettype($nul)."<br>";
?>
