<?php
require_once 'TextDecorator.class.php';

/**
 * TextDecoratorクラスの実装クラスです
 */
class UpperCaseText extends TextDecorator {

	/**
	 * インスタンスを生成します
	 */
	public function __construct(Text $target) {
		parent::__construct($target);
	}

	/**
	 * 半角小文字を半角大文字に変換して返します
	 */
	public function getText() {
		$str = parent::getText();
		$str = strtoupper($str);
		return $str;
	}
}