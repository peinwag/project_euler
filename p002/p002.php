<?php

$before = 1;
$current = 2;
$res = 2;

while(true) {

   $temp = $current;
   $current += $before;
   if($current > 4000000) {
      break;
   }
   $before = $temp; 
  
   if($current % 2) {
      $res += $current;
   }
}

echo $res;
