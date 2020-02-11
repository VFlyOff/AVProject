<?php
$link = mysqli_connect('localhost','root','','automdb');
	if (!$link) { 
	    die('Ошибка соединения: '.mysql_error());  
	};
?>