<?php

function calculateTotal(array $cart): float {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return (float)$total;
}
?>
