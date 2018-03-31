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
	function uniwrdcount($text) {
		$text = explode(' ', $text);
		$count = count($text);
		$un = [];
		for ($i=0; $i < $count; $i++) { 
			if (!in_array($text[$i], $un, true)) {
				array_push($un, $text[$i]);
			}
		}
		return count($un);
	}