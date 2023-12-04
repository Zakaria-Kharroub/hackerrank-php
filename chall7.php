<?php

function staircase($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces
        for ($j = $n - $i; $j > 0; $j--) {
            echo " ";
        }

        // Print # symbols
        for ($k = 1; $k <= $i; $k++) {
            echo "#";
        }

        // Move to the next line
        echo PHP_EOL;
    }
}

$n = intval(trim(fgets(STDIN)));
staircase($n);
