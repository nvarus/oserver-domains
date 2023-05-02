<?php
if (isset($_GET['name'])) {
	$name = $_GET['name'];
	session_start();
	
	$_SESSION['sessionID'] = session_id();
	$_SESSION['userName'] = $name;
	
	echo "<div>userName: " . $_SESSION['userName'] . "</div>";
	echo "<div>sessionID: " . $_SESSION['sessionID'] . "</div>";
}
