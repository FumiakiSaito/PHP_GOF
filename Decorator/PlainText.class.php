<?php
require_once 'Text.class.php';

/**
 * 編集前のテキストを表すクラス
 */
class PlainText implements Text {
	/**
	 * インスタンスが保持する文字列です
	 */
	private $textString = null;

	/**
	 * インスタンスが保持する文字列を返します
	 */
	public function getText() {
		return $this->textString;
	}

	/**
	 * インスタンスに文字列をセットします
	 */
	public function setText($str) {
		$this->textString = $str;
	}
}