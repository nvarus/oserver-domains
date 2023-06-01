<?php
include_once "./Control/Control.php";
include_once "./Control/Input.php";
include_once "./Control/Button.php";
include_once "./Control/Text.php";
include_once "./Control/Label.php";
include_once "./Control/Checkbox.php";
include_once "./Control/Select.php";
include_once "./Control/Radio.php";

	function convertToHTML($object) {
		$type = $object->getType();
		$name = $object->getName();
		$value = $object->getValue();
		$width = $object->getWidth();
		$height = $object->getHeight();
		$background = $object->getBackground();
		
		return "<input type='$type' name='$name' value='$value'
			style='width:$width;height:$height;background:$background;'>";
	}
	
	$button1 = new Button('teal', '100px', '45px',
		'Button1', 'Click My', true);

	$text1 = new Text('white', '200px', '40px',
		'Text1', '', 'Enter text');

	$label = new Label('text','yellow', '80px', '40px', $text1);
	
	$checkMale = new Radio('red', '20px', '20px',
		'gender', 'male', false);
	$labelMale = new Label('Male', 'white', '50px', '20px', $checkMale);
$checkFemale = new Radio('red', '20px', '20px',
	'gender', 'female', false);
$labelFemale = new Label('Female', 'white', '50px', '20px', $checkFemale);
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
	echo $button1->convertToHTML() . "<br><br>";
	echo $text1->convertToHTML();
	echo $label->convertToHTML();
	echo "<br>";
	echo $checkMale->convertToHTML();
	echo $labelMale->convertToHTML();
	echo $checkFemale->convertToHTML();
	echo $labelFemale->convertToHTML();
?>
</body>
</html>
