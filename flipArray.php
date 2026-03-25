<?php

function flipArray(array $arr): array {
    $result = [];
    
    foreach ($arr as $key => $value) {
        if (is_string($value) || is_int($value)) {
            $result[$value] = $key;
        }
    }
     
    return $result;
}
