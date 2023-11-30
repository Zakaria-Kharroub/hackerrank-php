<?php
function diagonalDifference($arr) {
    $premierDiago = 0;
    $douxiemDiago = 0;
    
    $cnt=count($arr);
    for($i=0 ; $i < $cnt ; $i++){
        $premierDiago += $arr[$i][$i] ;
        $douxiemDiago += $arr[$i][$cnt - $i - 1];
    }
    
    $valAbs=abs($premierDiago - $douxiemDiago) ;
    return $valAbs;

}
?>