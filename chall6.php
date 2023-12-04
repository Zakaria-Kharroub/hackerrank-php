<?php
function plusMinus($arr) {
   $n=count($arr);
   $positifCnt = $negatifCnt =  $zeroCnt = 0;
   foreach($arr as $num){
       if($num > 0){
         $positifCnt++ ;
       }elseif($num<0){
           $negatifCnt++ ;
       }else{
           $zeroCnt++;
       }
   }
   
   $positifRartio = $positifCnt / $n;
   $negatifRartio = $negatifCnt / $n; 
   $zeroRatio = $zeroCnt / $n; 
   
   echo $positifRartio . PHP_EOL ;
   echo $negatifRartio . PHP_EOL ;
   echo $zeroRatio . PHP_EOL;
   
}
?>
