<?php

define('limit', 20);

$res = limit;
while(true) {

	$res++;
	$tempString = (string)$res;
	$crossfoot = crossfoot($res);
	if(
		$crossfoot % 3 != 0 
		|| $tempString[strlen($tempString) -1] != 0 
		|| $res % 2 != 0
		|| $crossfoot % 9 != 0
		|| (int)($tempString[strlen($tempString) -2] . $tempString[strlen($tempString) -1]) % 4 != 0 
		|| (int)($tempString[strlen($tempString) -3] . $tempString[strlen($tempString) -2] . $tempString[strlen($tempString) -1]) % 8 != 0
	) {
		continue;
	}


	if(is_divisible($res)) {

		break;
	}
}

echo $res;


function is_divisible($number) {

	$res = true;
	foreach(range(2,limit) as $num) {

		if($number % $num === 0) {

			continue;
		} 
		$res = false;
		break;
	}

	return $res;
}

 function crossfoot ($digits)
 { 
 	$digits = (string)$digits;
 	$crossfoot = 0;
    for($i = 0; $i < strlen($digits); $i++) { 
		
		$crossfoot += $digits[$i]; 
    } 

    return $crossfoot; 
  } 
