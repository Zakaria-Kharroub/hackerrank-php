<?php
// utilisan for
$sum = 0;
    
$length = count($ar);
for ($i = 0; $i < $length; $i++) {
    $sum += $ar[$i];
}
return $sum;


// utilisant foreach

function simpleArraySum($ar) {
    $sum = 0;
    foreach ($ar as $elemt) {
        $sum += $elemt;
    }
    return $sum;
}


?>