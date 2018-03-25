<?php
function formIsValid() {
	return $_POST['length'] > 0;
}
function redirect($to) {
	header("Location: {$to}");
	die;
}
function requestPost($value) {
	if (isset($_POST[$value])) {
		return $_POST[$value];
	}
	return null;
}
function requestGet($value) {
	if (isset($_GET[$value])) {
		return $_GET[$value];
	}
	return null;
}
function del_strlen($file1, $file2) {
	$a = fopen($file1, 'r');
	$text = fread($a, filesize('lorem_ipsum.txt'));
	fclose($a);
	$text = explode(' ', $text);
	$text = array_filter($text, function ($a) { return mb_strlen($a) > $_POST['length'] ? false : true;});
	$text = implode(' ', $text);
	$b = fopen($file2, 'w');
	fwrite($b, $text);
	fclose($b);
}