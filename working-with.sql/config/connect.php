<?php
	$connect = mysqli_connect('localhost', 'root', '', 'prod_db');
	
	if(!$connect) {
		die("Не удалось подключиться к серверу");
	}