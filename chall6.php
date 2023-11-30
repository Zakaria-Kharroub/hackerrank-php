<?php
function plusMinus($arr) {
    $n = count($arr);

    $positive = $negative = $zero = 0;

    foreach ($arr as $num) {
        if ($num > 0) {
            $positive++;
        } elseif ($num < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    // Calculate ratios
    $positiveRatio = $positive / $n;
    $negativeRatio = $negative / $n;
    $zeroRatio = $zero / $n;

    // Print ratios with specified decimal places
    printf("%.6f\n", $positiveRatio);
    printf("%.6f\n", $negativeRatio);
    printf("%.6f\n", $zeroRatio);
}
?>