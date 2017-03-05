<?
	$message = “Текст сообщения”;
	$to = “fullzp@mail.ru”;
	$subject = “Тема сообщения”;
	mail ($to, $subject, $message);
	---------
	$message = “Текст сообщения”;
	$to = “fullzp@mail.ru”;
$from = “xhearse@gmail.com ”;
	$subject = “Тема сообщения”;
$subject = “=?utf-8?B?”.base64_encode($subject).”?=”;
//Это кодировка для темы сообщения в mail.ru
$headers = “From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-9\r\n”;
	mail ($to, $subject, $message, $headers);
?>
