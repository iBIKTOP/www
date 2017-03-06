<?php
	session_start ();// начинаем сессию, без этой команды не будет работать $_SESSION
	if(isset($_POST["send"])){ //делаем проверку по начатию на кнопку
		$from=htmlspecialchars($_POST["from"]);//htmlspecialchars видит теги
		$to=htmlspecialchars($_POST["to"]);
		$subject=htmlspecialchars($_POST["subject"]);
		$message=htmlspecialchars($_POST["message"]);
		$_SESSION["from"]=$from;//
		$_SESSION["to"]=$to;
		$_SESSION["subject"]=$subject;
		$_SESSION["message"]=$message;

		$error=false;
		if($from == "" || !preg_match("/@/", $from)){//!preg_match делает проверку на символы
			$error_from = "Email error or enter email";
			$error=true;
		}
		if($to == "" || !preg_match("/@/", $to)){
			$error_to = "Email error or enter email";
			$error=true;
		}
		if($subject == ""){
			$error_subject = "Enter subject";
			$error=true;
		}
		if($message == ""){
			$error_message = "Enter message";
			$error=true;
		}
		if (!$error) {//если error не true то
			$subject = "=?UTF-8?B?".base64_encode($subject)."?=";//кодировка темы
			$headers = "From: $from\r\nReply-to: $from\r\nContent_type: text/plain; charset=utf-8\r\n";// заголовки для майл.ру
			mail($to, $subject, $message, $headers);//отправка на мыло
			header("Location: success.php?send=1");//переход на другую страницу
			exit;//прекращает выполнение кода
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form feedback</title>
</head>
<body>
	<h2>Form feedback</h2><br>
	<form name="feedback" action="" method="post">
		<label>From:</label><br>
		<input type="text" name="from" value="<?=$_SESSION["from"]?>">
		<span style="color: red"><?=$error_from?></span><br>
		<label>To:</label><br>
		<input type="text" name="to" value="<?=$_SESSION["to"]?>">
		<span style="color: red"><?=$error_to?></span><br>
		<label>Subject:</label><br>
		<input type="text" name="subject" value="<?=$_SESSION["subject"]?>">
		<span style="color: red"><?=$error_subject?></span><br>
		<label>Message:</label><br>
		<textarea name="message" cols="35" rows="10"><?=$_SESSION["message"]?></textarea>
		<span style="color: red"><?=$error_message?></span><br>
		<input type="Submit" name="send" value="Send">
	</form>
</body>
</html>