<?php
require_once 'News.class.php';
require_once 'NewsBuilder.class.php';

class RssNewsBuilder implements NewsBuilder {
	public function parse($url) {
		$data = simplexml_load_file($url);
		if ($data === false) {
			throw new Exceptio('read data failed!');
		}

		$list = array();
		foreach ($data->item as $item) {
			$dc = $item->children('http://purl.org/dc/elements/1.1/'); // xmlのdc（名前空間接頭辞）が取れる
			$list[] = new News($item->title, $item->link, $dc->date);
		}
		return $list;
	}
}