<?php
require_once 'DisplaySourceFilelmpl2.class.php';

/**
 * DisplaySourceFileImplクラスをインスタンス化する
 * 内容を表示するファイルはShowFile.class.php
 *
 */
$show_file = new DisplaySourceFileImpl2('./ShowFile.class.php');

/**
 * プレーンテキストとハイライトしたファイル内容をそれぞれ表示する
 */
$show_file->display();
