<?php
function formIsValid() {
	return strlen(($_POST['t1'])) > 0 && strlen(($_POST['t2'])) > 0;
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
function getCommonWords() {
	$a = explode(" ", $_POST['t1']);
	$b = explode(" ", $_POST['t2']);
	$c = [];
	foreach ($a as $k) {
		foreach ($b as $j) {
			$k == $j ? array_push($c, $k) : null;
		}
	}
	return $c;
}