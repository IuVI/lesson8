<?php
function formIsValid() {
	return strlen(($_POST['t1'])) > 0;
}
function redirect($to) {
	header("Location: {$to}");
	die;
}
function requestPost($value) {
	if (isset($_POST[$value])) {
		return $_POST[$value];
	}
	return null;
}
function requestGet($value) {
	if (isset($_GET[$value])) {
		return $_GET[$value];
	}
	return null;
}
function lentop() {
	$t1 = explode(" ", $_POST['t1']);
	$l = count($t1);
	$a = array();
	$top = array();
	$j = 0;
	for ($i=0; $i <= $l-1; $i++) {
		array_push($a, strlen($t1[$i]));
	}
	function cmpr($a, $b) {
	    if ($a == $b) {
	        return 0;
	    }
	    return ($a < $b) ? 1 : -1;
	}
	uasort($a, 'cmpr');
	foreach ($a as $key => $value) {
		array_push($top, $t1[$key]);
		if ($j > 1) {
			break;
		}
		$j+= 1;
	}
	return $top;
}