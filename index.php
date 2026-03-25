<?php

require_once 'calculateTotal.php';
require_once 'areAnagrams.php';
require_once 'flipArray.php';

$cart = [['price' => 1000, 'quantity' => 2], ['price' => 50, 'quantity' => 1]];
echo "Total: " . calculateTotal($cart) . "\n";

echo "Anagram ('Listen', 'Silent'): " . (areAnagrams('Listen', 'Silent')) . "\n";

print_r(flipArray(['a' => 1, 'b' => 2]));
?>
