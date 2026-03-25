<?php

function areAnagrams(string $a, string $b): bool {
    $cleanA = str_replace(' ', '', strtolower($a));
    $cleanB = str_replace(' ', '', strtolower($b));
    
    $arrA = str_split($cleanA);
    $arrB = str_split($cleanB);
    
    sort($arrA);
    sort($arrB);
    
    return $arrA === $arrB;
}
?>
