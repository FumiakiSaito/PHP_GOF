<?php
require_once 'ItemPrototype.class.php';

/**
 * Clientクラスに相当する
 * このクラスからはConcreatePrototypeクラスは見えていない
 */
class ItemManager {
	private $items;

	public function __construct() {
		$this->items = array();
	}

	public function registItem(ItemPrototype $item) {
		$this->items[$item->getCode()] = $item;
	}

	/**
	 * Prototypeクラスのメソッドを使って、新しいインスタンスを作成
	 */
	public function create($item_code) {
		if (!array_key_exists($item_code, $this->items)) {
			throw new Exception('item_code['. $item_code. '] not exists !');
		}
		$cloned_item = $this->items[$item_code]->newInstance();

		return $cloned_item;
	}
}