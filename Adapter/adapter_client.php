<?php
require_once 'DisplaySourceFilelmpl.class.php';

/**
 * DisplaySourceFileImplクラスをインスタンス化する
 * 内容を表示するファイルはShowFile.class.php
 *
 */
$show_file = new DisplaySourceFileImpl('./ShowFile.class.php');

/**
 * プレーンテキストとハイライトしたファイル内容をそれぞれ表示する
 */
$show_file->display();
