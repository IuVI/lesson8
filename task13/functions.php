<?php
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