<?php
include 'functions.php';
$message = requestGet('message');
if ($_POST) {
	if (formIsValid()) {
		$message =  'Форму успішно надіслано';
		$comwords = getCommonWords();
		redirect('/hometask8/task1?message=' . $message ."&comwords=" .serialize($comwords));
	}
	$message = "Form is not valid";
}
$comwords = unserialize(requestGet('comwords'));
include 'layout.phtml';
