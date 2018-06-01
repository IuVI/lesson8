<?php
	include 'functions.php';
	$message = requestGet('message');
	$act = requestGet('action');
	$id = requestGet('id');
	if ($act == 'delete' && $id) {
		$comments = loadComments();
		$result = delete_comment($comments, $id);
		$message = $result === false ? 'Error deleting' : 'Deleted';
			redirect('?message=' .$message);
	}
	
	if ($_POST) {
		if (formIsValid()) {
			$comment = createComment($_POST);
			$no_abuse = del_abuse($comment, $abu_wrds);
			$result = save($comment);
			$message = $result === false ? 'Error saving' : 'Saved';
			redirect('?message=' .$message);
		}
		$message = "Form is not valid";
	}
	$comments = loadComments();
	include 'layout.phtml';