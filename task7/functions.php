<?php
	define('COMMENTS_STORAGE', 'comments.txt');
	$abu_wrds = ['/ху(й|и|я)/ui', '/пизд/ui', '/д(е|и)бил/ui', '/гандон/ui', '/сук(а|ин|ины)/ui', '/у(е|ё|йо)б(ок|ан)/ui', '/ебат.+/ui',
    '/пид(а|о|)р.*/ui', '/конче(н|нн).*/ui', '/(е|ё)бан.*/ui', '/манда.*/ui', '/трах.*/ui', '/анус/ui', '/анальн.*/ui', '/жоп(у|а|ой)/ui',
    '/залуп.*/ui'];
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
	function getValues(array $array, $key) {
		if (isset($array[$key])) {
			return $array[$key];
		}
		return null;
	}
	function formIsValid() {
		return !empty($_POST['message']) && !empty($_POST['login']) && !empty($_POST['email']);
	}
	function redirect($to) {
		header("Location: {$to}");
		die;
	}
	function requestPost($key) {
		return getValues($_POST, $key);
	}
	function requestGet($key) {
		return getValues($_GET, $key);
	}
	function createComment(array $data) {
		return [
			'id' => rand(100000, 999999),
			'name' => getValues($data, 'login'),
			'email' => getValues($data, 'email'),
			'message' => strip_tags(getValues($data, 'message'), '<b>'),
			'created' => @date('Y.m.d H:i:s')
			];
	}
	function save(array $comment) {
		$comments = loadComments();
		$comments[] = $comment;
		$string = serialize($comments);
		return file_put_contents(COMMENTS_STORAGE, $string);
	}
	function delete_comment(array & $comments, $id) {
		foreach ($comments as $k => $comment) {
			if ($comment['id'] == $id) {
				unset($comments[$k]);
			}
		}
		return file_put_contents(COMMENTS_STORAGE, serialize($comments));
	}
	function del_abuse (& $comment, $abu_wrds) {
		foreach ($abu_wrds as $val) {
			if (preg_match($val, $comment['message'])) {
				return $comment['message'] = 'Некорректный комментарий.';
			}
		}
	}