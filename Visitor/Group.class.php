<?php
require_once 'OrganizationEntry.class.php';

class Group extends organizationEntry {
	private $entries;

	public function __construct($code, $name) {
		parent::__construct($code, $name);
		$this->entries = array();
	}

	/**
	 * 子要素を追加する
	 */
	public function add(OrganizationEntry $entry) {
		array_push($this->entries, $entry);
	}

	/**
	 * 子要素を取得する
	 */
	public function getChildren() {
		return $this->entries;
	}
}