<?php
	
	
	
	
	$connect = mysqli_connect('localhost', 'root', '', 'Music_Collection');
	
	if (!$connect) {
		die("Не получилось подключиться к базе данных");
	}
