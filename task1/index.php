<?php
include 'functions.php';
$message = requestGet('message');
if ($_POST) {
	if (formIsValid()) {
		$message =  'Форму успішно надіслано';
		$comwords = getCommonWords();
		redirect('/hometask8/task1?message=' . $message ."&comwords=" .$comwords);
	}
	$message = "Form is not valid";
}
$comwords = requestGet('comwords');
include 'layout.phtml';
