<?php
	$arr = array(12, 13, 23, 54, 100);
	sort ($arr);//сортирует по значениям по возврастанию, при этом интексы поменяются
	print_r ($arr);//вывод на экран всего массива
	echo "<br>";
	rsort ($arr);//сортирует по значениям по убыванию, при этом интексы поменяются
	print_r ($arr);
	echo "<br>";
	asort ($arr);//сортирует по значениям по возврастанию, при этом интексы сохраняются, сортирует как ассоциотиный массив
	print_r ($arr);
	echo "<br>";
	$arr2 = array("a"=>56, "b"=>13, "c"=>334, "d"=>54, "e"=>99);
	arsort ($arr2);//сортирует по значениям по убыванию, при этом интексы сохраняются, сортирует как ассоциотиный массив
	print_r ($arr2);
	echo "<br>";
	ksort ($arr2);//сортирует по ключам по возврастанию, при этом значения сохраняются
	print_r ($arr2);
	echo "<br>";
	krsort ($arr2);//сортирует по ключам по убыванию, при этом значения сохраняются
	print_r ($arr2);
	echo "<br>";
	shuffle ($arr2);//рандомно перекидывает значения в массиве, при этом ключи остаются на месте
	print_r ($arr2);
	echo "<br>";
	echo "<hr>";
	echo in_array(56, $arr2);//находит в нашем массиве значение и выводит true/false
	echo "<br>";
?>