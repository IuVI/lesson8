<?php
include 'functions.php';
$message = requestGet('message');
if ($_POST) {
	if (formIsValid()) {
		$message =  'Форму успішно надіслано';
		redirect('/hometask7/devionity_t6_l28?message=' . $message);
	}
	$message = "Form is not valid";
}
include 'layout.phtml';