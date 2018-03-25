<?php
include 'functions.php';
$file1 = 'lorem_ipsum.txt';
$file2 = 'lorem_ipsum2.txt';
$file3 = 'cyril_ipsum.txt';
$file4 = 'cyril_ipsum2.txt';
$message = requestGet('message');
if ($_POST) {
	if (formIsValid()) {
		del_strlen($file1, $file2);
		del_strlen($file3, $file4);
		$message =  'Форму успішно надіслано';
		redirect('/hometask8/task3?message=' .$message);
	}
	$message = "Form is not valid";
}
include 'layout.phtml';