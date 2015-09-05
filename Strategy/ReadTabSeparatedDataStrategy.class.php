<?php
require_once 'ReadItemDataStrategy.class.php';

/**
 * タブ区切りのデータを読み込む
 */
class ReadTabSeparatedDataStrategy extends ReadItemDataStrategy {
	/**
	 * データファイルを読み込み、オブジェクトの配列を返す
	 */
	protected function readData($filename) {
		$fp = fopen($filename, 'r');

		$dummy = fgets($fp, 4096);

		/**
		 * データの読み込み
		 */
		$return_value = array();
		while ($buffer = fgets($fp, 4096)) {
			list($item_code, $item_name, $price, $release_date) = explode("\t", $buffer);

			$obj = new stdClass();
			$obj->item_name = $item_name;
			$obj->item_code = $item_code;
			$obj->price = $price;

			list($year, $mon, $day) = explode('/', $release_date);
			$obj->release_date = mktime(0, 0, 0, (int)$mon, (int)$day, (int)$year);

			$return_value[] = $obj;
		}

		fclose($fp);

		return $return_value;
	}

}