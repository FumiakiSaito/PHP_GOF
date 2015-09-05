<?php
require_once 'ShowFile.class.php';

/**
 * ShowFileクラスをインスタンスする
 * 内容を表示するファイルはShowFile.class.php
 */
try {
	$show_file = new ShowFile('./ShowFile.class.php');
} catch (Exception $e) {
	die($e->getMessage());
}

/**
 * プレーンテキストとハイライトしたファイル内容をそれぞれ表示する
 */
$show_file->showplain();
echo '<hr>';
$show_file->showHighlight();
