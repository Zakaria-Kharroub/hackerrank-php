<?php
function staircase($n) {
    for ($i=1 ; $i<= $n ; $i++){
        for($j=$n-$i; $j>0; $j--){
            echo " ";
        }
        for($k=1; $k<=$i; $k++){
            echo "#";
        }
        echo PHP_EOL;
    }
}
?>