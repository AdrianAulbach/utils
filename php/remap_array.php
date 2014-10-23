<?php

/**
 * @param $array: Input array that will be remaped
 * @param $keys: New keys to assign to the elements of $array
 * @param $no_change: If this is true and there is no new key for an element, use the old key. If false the element won't be present in the returned array
 */
function remap($array, $keys, $no_change=false) {
	foreach($array as $key => $value) {
		if(isset($keys[$key])) {
			//add element with new key to the returned array
			$result[$keys[$key]] = $value;
		} elseif($no_change) {
			//add element with the old key to the returned array
			$result[$key] = $value;
		}
	}
	return $result;
}