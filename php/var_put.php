<?php
$data = file_get_contents('php://input');

if(preg_match('/(\-+[\w]+)/', $data, $matches)) {
    $separator = $matches[1];
    $parts = explode($separator, $data);

    $_PUT = array();
    foreach($parts as $part) {
        if(preg_match('/name="([\w]+)"[^\w]*([^\n\r]+)/', $part, $matches)) {
            $_PUT[$matches[1]] = $matches[2];
        } else {
            //ToDo: error
        }
    }
} else {
    //ToDo: error
}