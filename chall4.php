<?php
// utilsant foreach
function aVeryBigSum($ar) {
    $sum = 0;
    foreach ($ar as $value) {
        $sum += $value;
    }
    return $sum;
}

//  utilisan for
function aVeryBigSum($ar) {
    $sum = 0;
    $n = count($ar);
    for ($i = 0; $i < $n; $i++) {
        $sum += $ar[$i];
    }
    return $sum;
}
?>