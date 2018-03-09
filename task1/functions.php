<?php
function formIsValid() {
	return !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']);
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