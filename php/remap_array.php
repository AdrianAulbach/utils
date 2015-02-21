<?php

/**
 * @param $array: Input array that will be remaped
 * @param $keys: New keys to assign to the elements of $array
 * @param $no_change: If this is true and there is no new key for an element, use the old key. If false the element won't be present in the returned array
 */
function remap($array, $keys, $no_change=false) {
    foreach($keys as $keyIn => $keyOut) {
        $result[$keyOut] = $array[$keyIn];
        unset($array[$keyIn]);
    }
    
    if($no_change) {
        return array_merge($result, $array);
    }
    
    return $result;
}