<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		body {
			font-family: "Segoe UI";
		}
		.content {
			max-width: 800px;
			margin: 0 auto;
		}
		table {
			border-top: 3px solid SteelBlue;
			border-bottom: 3px solid SteelBlue;
			border-collapse: collapse;
			width: 100%;

		}
		th {
			border-bottom: 3px solid SteelBlue;
			line-height: 32px;
		}
		td {
			border-bottom: 1px solid SteelBlue;
			padding: 5px;
			font-weight: 500;
			text-align: center;
		}
		caption {
			color: SteelBlue;
			text-align: center;
			padding: 10px 0;
			font-size: 25px;
		}
		h2 {
			
			color: SteelBlue;
			width: 100%;
			text-align: center;
			margin: 30px 0 10px 0;
			border-top: 2px solid SteelBlue;
			
		}
		form {
			max-width: 500px;
			margin: 0 auto;
		}
		input {
			width: 100%;
			margin-bottom: 5px;
			font-size: 16px;
			line-height: 20px;
			padding: 5px;
			color: SteelBlue;
			border: 1px solid SteelBlue;
		}
		input:focus {
			border: 2px solid SteelBlue;
			outline: 0;
			box-shadow: 0 0 0 0.2rem rgba(158, 158, 158, 0.25);
		}
		input::placeholder {
			color: #212529;
			opacity: 0.4;
			
		}
		button {
			background: white;
			border: 2px solid SteelBlue;
			color: SteelBlue;
			width: 90px;
			font-size: 18px;
			line-height: 28px;
			margin: 0 auto;
			cursor: pointer;
		}
		button:hover {
			background: SteelBlue;
			color: white;
		}
		form > div {
			width: 100%;
			display: flex;
		}
		
	</style>
</head>

<body>
	<div class="content">
<?php
	require_once "./vendor/table.php";

?>
	</div>
</body>
</html>
