<?php
	//$file = fopen("a.txt", "a+t");//+t это дает возможность добавлять \t\n и т.д.
	/*'r'	Открывает файл только для чтения; помещает указатель в начало файла.
	'r+'	Открывает файл для чтения и записи; помещает указатель в начало файла.
	'w'	Открывает файл только для записи; помещает указатель в начало файла и обрезает файл до нулевой длины. Если файл не существует - пробует его создать.
	'w+'	Открывает файл для чтения и записи; помещает указатель в начало файла и обрезает файл до нулевой длины. Если файл не существует - пытается его создать.
	'a'	Открывает файл только для записи; помещает указатель в конец файла. Если файл не существует - пытается его создать. В данном режиме функция fseek() не применима, записи всегда добавляются.
	'a+'	Открывает файл для чтения и записи; помещает указатель в конец файла. Если файл не существует - пытается его создать. В данном режиме функция fseek() влияет только на место чтения, записи всегда добавляются.
	http://php.net/manual/ru/function.fopen.php*/
	//fwrite($file, "Text1\nText2\nText3\n");
	//fclose($file);
	$file = fopen("a.txt", "r+t");
	while (!feof($file)) {//feof при достижении конца скажет true, поэтому цикл крутим пока !true
		echo fread($file, 5);//5 длинна считываемой строки;
	}
	echo "<hr>";
	fseek($file, 0);//fseek указывает после какого чимвола установить курсор
	echo fread($file, 1);//т.е. покажет только первый символ в данном случае
	fclose($file);
	echo "<hr>";
	file_put_contents("b.txt", "Text111\n Text222\n Text333\n");//создает файл и перезаписывает данные
	echo file_get_contents("b.txt")."<br>";//считываем данные
	echo file_exists("a.txt")."<br>";//проверка на существование файла
	echo filesize("a.txt")."<br>";//покажет размер файла
	rename("b.txt", "c.txt");//переименование файла
	unlink("c.txt");//удаление файла
?>