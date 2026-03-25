<?php

function areAnagrams(string $a, string $b): bool {
    $lowerA = strtolower($a);
    $lowerB = strtolower($b);
    
    if (strlen($lowerA) !== strlen($lowerB)) {
        return false;
    }

    $len = strlen($lowerA);
    
    $arrA = [];
    $arrB = [];
    
    for ($i = 0; $i < $len; $i++) {
        $arrA[] = $lowerA[$i];
        $arrB[] = $lowerB[$i];
    }
    
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arrA[$j] > $arrA[$j + 1]) {
                $temp = $arrA[$j];
                $arrA[$j] = $arrA[$j + 1];
                $arrA[$j + 1] = $temp;
            }
            if ($arrB[$j] > $arrB[$j + 1]) {
                $temp = $arrB[$j];
                $arrB[$j] = $arrB[$j + 1];
                $arrB[$j + 1] = $temp;
            }
        }
    }
    
    for ($i = 0; $i < $len; $i++) {
        if ($arrA[$i] !== $arrB[$i]) {
            return false;
        }
    }
    
    return true;
}



    
}
