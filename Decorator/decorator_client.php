<?php
require_once 'UpperCaseText.class.php';
require_once 'DoubleByteText.class.php';
require_once 'PlainText.class.php';


$text = isset($_POST['text']) ? $_POST['text'] : '';
$decorate = isset($_POST['decorate']) ? $_POST['decorate'] : array();

if ($text !== '') {
	$text_object = new PlainText();
	$text_object->setText($text);

	foreach ($decorate as $val) {
		switch ($val) {
			case 'double':
				$text_object = new DoubleByteText($text_object);
				break;
			case 'upper':
				$text_object = new UpperCaseText($text_object);
				break;
		}
	}
	echo $text_object->getText(). "<br>";
}
?>
<html>
<body>
<head>
<meta charset="UTF-8">
</head>
<hr>
<form action="" method="post">
テキスト:<input type="text" name="text"><br>
装飾：<input type="checkbox" name="decorate[]" value="upper">大文字に変換
<input type="checkbox" name="decorate[]" value="double">2バイト文字に変換
<input type="submit">
</form>
</body>
</html>
