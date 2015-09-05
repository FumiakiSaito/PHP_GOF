<?php
require_once 'DataSource.class.php';

class Listing {
	private $data_source;

	/**
	 * コンストラクタ
	 * @param $source_name ファイル名
	 */
	function __construct($data_source) {
		$this->data_source = $data_source;
	}

	/**
	 * データソースを開く
	 */
	function open() {
		$this->data_source->open();
	}

	/**
	 * データソースからデータを取得する
	 * @return array データの配列
	 */
	function read() {
		return $this->data_source->read();
	}

	/**
	 * データソースを閉じる
	 */
	function close() {
		$this->data_source->close();
	}
}