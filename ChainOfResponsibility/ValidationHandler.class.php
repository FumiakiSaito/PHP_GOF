<?php
abstract class ValidationHandler {
	private $next_handler;

	public function __construct() {
		$this->next_handler = null;
	}

	public function sethandler(ValidationHandler $handler) {
		$this->next_handler = $handler;
		return $this;
	}

	public function getnextHandler() {
		return $this->next_handler;
	}

	/**
	 * チェーンの実行
	 */
	public function validate($input) {
		$return = $this->execValidation($input);
		if (!$return) {
			return $this->getErrorMessage();
		} else if (!is_null($this->getNextHandler())) {
			return $this->getNextHandler()->validate($input);
		} else {
			return true;
		}
	}

	/**
	 * 自クラスが担当する処理を実行
	 */
	protected abstract function execValidation($input);


	/**
	 * 処理失敗時のメッセージを取得する
	 */
	protected abstract function getErrorMessage();
}