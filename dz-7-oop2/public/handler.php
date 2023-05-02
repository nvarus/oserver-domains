<?php
	include_once "../src/ListCategory/ListCategory.php";
	
	$postData = file_get_contents('php://input');
	$data = json_decode($postData, true);
	
	if (isset($data['category'])) {
		$listCategory->showData($data['category']);
	}


