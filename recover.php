<?php
	session_start();
	echo "<pre>";
	$fp = fopen('text.txt', 'a');
	
	$str = json_encode($_SESSION);
	
	fwrite($fp, $str);
	
	header('Location:' . $_SERVER['HTTP_REFERER']);


?>