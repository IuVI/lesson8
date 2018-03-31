<?php
include 'functions.php';
$message = requestGet('message');
$b = uniwrdcount(requestPOST('text'));
if ($_POST) {
	if (formIsValid()) {
		$message =  'Форму успішно надіслано';
		redirect('?message=' .$message ."&ba=" .$b);
	}
	$message = "Form is not valid";
}
include 'layout.phtml';