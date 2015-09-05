<?php
require_once 'Command.class.php';
require_once 'File.class.php';

class TouchCommand implements Command {
	private $file;

	public function __construct(File $file) {
		$this->file = $file;
	}

	public function execute() {
		$this->file->create();
	}
}