<?php
	$text = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
	function countwrds($text) {
		$ar = explode(' ', $text);
		$unq = array_unique($ar);
		$unq = array_flip($unq);
		foreach ($unq as $key => $v) {
			$cnt = 0;
			foreach ($ar as $k) {
				if ($key == $k) {
					$cnt += 1;
				}
			}
			$unq[$key] = $cnt;
		}
		arsort($unq);
		return $unq;
	}
	print_r(countwrds($text));