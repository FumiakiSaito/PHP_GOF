<?php
require_once 'ReaderFactory.class.php';
?>
<html lang=ja'>
<head></head>
<title>作曲家と作品たち</title>
<body>
<?php
/*
	$column = 0;
	$tmp = '';
	$handle = fopen('music.csv', 'r');

	while ($data = fgetcsv($handle, 4096, ',')) {
		$num = count($data);
		for ($i = 0; $i < $num; $i++) {
			if ($i == 0) {
				if ($column != 0 && $data[$i] != $tmp) {
					echo '</ul>';
				}
				if ($data[$i] != $tmp) {
					$tmp = $data[$i];
					echo '<b>'. $tmp. '</b>';
					echo '<ul>';
				}
			} else  {
				echo '<li>';
				echo $data[$i];
				echo '</li>';
			}
		}
		$column++;
	}
	echo '</ul>';
*/
	/**
	 * 入力ファイル
	 */
//	$filename = 'music.csv';
	$filename = 'music.xml';

	$factory = new ReaderFactory();
	$data = $factory->create($filename);
	$data->read();
	$data->display();

?>

</body>
</html>