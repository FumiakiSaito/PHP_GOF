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
			$dc = $item->children('http://purl.org/dc/elements/1.1/'); // xml‚Ìdci–¼‘O‹óŠÔÚ“ª«j‚ªæ‚ê‚é
			$list[] = new News($item->title, $item->link, $dc->date);
		}
		return $list;
	}
}