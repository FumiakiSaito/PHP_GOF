<?php
require_once 'Text.class.php';

/**
 * Textクラスを修飾するDecoratorです
 */
abstract class TextDecorator implements Text {
	/**
	 * Text型の変数
	 */
	private $text;

	/**
	 * インスタンスを生成する
	 */
	public function __construct(Text $target) {
		$this->text = $target;
	}

	/**
	 * インスタンスが保持する文字列を返します
	 */
	public function getText() {
		return $this->text->getText();
	}

	/**
	 * インスタンスに文字列をセットします
	 */
	public function setText($str) {
		$this->text->setText($str);
	}
}