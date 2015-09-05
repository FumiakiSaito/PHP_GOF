<?php
require_once 'ValidationHandler.class.php';

class AlphabetValidationHandler extends ValidationHandler {

	protected function execValidation($input) {
		return preg_match('/^[a-z]*$/i', $input);
	}

	protected function getErrorMessage() {
		return '半角英字で入力してください';
	}
}