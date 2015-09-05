<?php
require_once 'Reader.class.php';

class XMLFileReader implements Reader {

	/**
	 * 内容を表示するファイル名
	 */
	private $filename;

	/**
	 * データを扱うハンドラ名
	 */
	private $handler;

	/**
	 * コンストラクタ
	 * @param string ファイル名
	 * @throws Exception
	 */
	public function __construct($filename) {
		if (!is_readable($filename)) {
			throw new Exception('file {'. $filename. '} is not reaable!');
		}
		$this->filename = $filename;
	}

	/**
	 * 読み込みを行う
	 */
	public function read() {
		$this->handler = simplexml_load_file($this->filename);
	}

	/**
	 * 文字コードの変換を行う
	 */
	private function convert($str) {
		return mb_convert_encoding($str, mb_internal_encoding(), 'auto');
	}


	/**
	 * 表示を行う
	 */
	public function display() {
		foreach ($this->handler->artist as $artist) {
			echo '<b>'. $this->convert($artist['name']). '</b>';
			echo '<ul>';
			foreach ($artist->music as $music) {
				echo '<li>';
				echo $this->convert($music['name']);
				echo '</li>';
			}
			echo '</ul>';
		}
	}


}