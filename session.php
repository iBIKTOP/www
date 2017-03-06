<?
	session_start();//начало сессии
	$num = (isset ($_SESSION[“num”])) ? $_SESSION[“num”] : 0;
	$num++;
	$_SESSION[“num”];
	echo “Пользователь обновил страничку $num раз”;
	session_destroy();//таким образом можем удалить сессию
?>
