<?php
	function formIsValid() {
		return strlen(($_POST['text'])) > 0;
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
	function revtext($text) {
		$text = explode('.', $text);
		$text = array_reverse($text);
		unset($text[0]);
		return implode($text, '.') .'.';
	}