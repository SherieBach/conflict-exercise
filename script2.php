<?php



function add($a, $b) {
    $sum = $a + $b;
    foreach($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}