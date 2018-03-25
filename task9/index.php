<?php
include 'functions.php';
$message = requestGet('message');
$b = revert(requestPOST('text'));
if ($_POST) {
	if (formIsValid()) {
		$message =  'Форму успішно надіслано';
		redirect('/hometask8/task9?message=' .$message ."&ba=" .$b);
	}
	$message = "Form is not valid";
};
include 'layout.phtml';