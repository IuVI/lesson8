<?php
$a = "Таварісч Брєжнєв розчісував вії перед дзеркалом допоки Галина нарізала московську";
function lentop($t1) {
	$t1 = explode(" ", $t1);
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
print_r(lentop($a));