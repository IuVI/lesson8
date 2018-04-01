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
	function capsentence($text) {
		$text = explode('.', $text);
		foreach ($text as $k => $val) {
			$l = mb_strlen($val);
			$text[$k] = mb_substr($val, 0, 1) == ' ' ? mb_substr($val, 0, 1) .mb_strtoupper(mb_substr($val, 1, 1)) . mb_substr($val, 2) :
				mb_strtoupper(mb_substr($val, 0, 1)) .mb_substr($val, 1);
		}
		return implode($text, '.');
	}