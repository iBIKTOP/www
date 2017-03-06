<?
	session_start();
	if($_GET["send"]==1)
		echo "You send message to email: ".$_SESSION["to"];
?>