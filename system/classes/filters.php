<?php
include_once "bbcode/bbcode.lib.php";
class Filters {
	static function full($text)
	{
		$bb = new bbcode($text);
		include "bbcode/smiles.php"; //Массив со смайлами
		$bb->mnemonics = $smiles;
		return $bb->get_html();
	}
	
	static function half($text)
	{
		return nl2br(htmlspecialchars($text));
	}
}