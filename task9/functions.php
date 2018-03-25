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
function revert($text) {
        $l = strlen($text);
        $rev = "";
        for ($i = $l-1; $i > -1; $i--) {
            $rev = $rev .$text[$i];
        }
        return $rev;
}