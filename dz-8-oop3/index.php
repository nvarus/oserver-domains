<?php
include_once "./User.php";

$user1 = new User("ivan", "ivan@mail.com");
$user2 = new User("nikolay", "nikolay@mail.com");
$user3 = new User("semen", "semen@mail.com");
$user4 = new User("peter", "peter@mail.com");
$user5 = new User("sidor", "sidor@mail.com");

$userList = [$user1, $user2, $user3, $user4, $user5];
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
foreach ($userList as $user) {
	$str = $user->getUser();
	echo '<a href="session.php?name=' . $user->name . '">' .$str. '</a></br>';
}
?>
</body>
</html>