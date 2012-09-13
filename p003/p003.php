<?php

if(!defined('LIBRARY_MODE')) {


	$number = "600851475143";
	$primeFactors = array();
	factorize($number, $primeFactors);

	echo max($primeFactors);

	function factorize($number, &$primeFactors, $primeNumber = "2") {

	   while($number != 1) {
      
     	 if(bcmod($number, $primeNumber) == 0) {
        	 $primeFactors[] = $primeNumber;
         	$number = bcdiv($number, $primeNumber);
         	$primeNumber = 2;
      	}

     	 	$primeNumber = getNextPrime($primeNumber);
   		}
	}
}
function getNextPrime($number) {

	$prime = false;

	while(!$prime) {
		
		$number++;

		if($number % 2 === 0) {
			continue;
		}

		$prime = isPrime($number);
	}

	return (string)$number;
}

function isPrime($number) {

	for($i = 2; $i*$i <= $number; $i++) {
		if($number % $i === 0) {
			return false;
		}
	}
	
	return true;
}
