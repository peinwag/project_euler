<?php
require_once '../functions.php';

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