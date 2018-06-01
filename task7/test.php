<?php
	define('COMMENTS_STORAGE', 'comments.txt');
	function loadComments() {
		$contents = file_get_contents(COMMENTS_STORAGE);
		if ($contents === false) {
			return [];
		}
		if (empty($contents)) {
			return [];
		}
		$comments = @unserialize($contents);
		if ($comments === false) {
			http_response_code(500);
			die('System error');
		}
		return $comments;
	}
	function delete_comment(array & $comments, $id) {
		foreach ($comments as $k => $comment) {
			if ($comment['id'] == $id) {
				unset($comments[$k]);
			}
		}
		return file_put_contents(COMMENTS_STORAGE, serialize($comments));
	}