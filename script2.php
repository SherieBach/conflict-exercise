<?php


function addNumbers($a, $b) {
    $sum = $a + $b;
    foreach($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}