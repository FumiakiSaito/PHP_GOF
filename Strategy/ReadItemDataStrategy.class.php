<?php
/**
 * Strategyに相当する
 */
abstract class ReadItemDataStrategy {
	private $filename;

	/**
	 * コンストラクタ
	 */
	public function __construct($filename) {
		$this->filename = $filename;
	}

	/**
	 * データファイルを読み込みオブジェクトの配列で返す
	 */
	public function getData() {
		if (!is_readable($this->getFilename())) {
			throw new Exception('file ['. $this->getFilename(). '] is not readable');
		}
		return $this->readData($this->getFilename());
	}

	/**
	 * ファイル名を返す
	 */
	public function getFilename() {
		return $this->filename;
	}

	/**
	 * ConcreateStrategyクラスに実装させるメソッド
	 */
	protected abstract function readData($filename);
}