<?php
include 'functions.php';
$message = requestGet('message');
if ($_POST) {
	if (formIsValid()) {
		$message =  'Форму успішно надіслано';
		$b = serialize(lentop());
		redirect('/hometask8/task2?message=' .$message ."&b=" .$b);
	}
	$message = "Form is not valid";
}
$b = unserialize(requestGet('b'));
include 'layout.phtml';