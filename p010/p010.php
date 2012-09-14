<?php

require_once '../functions.php';

$res = 2;
$start = 2;
$primes = array();

while(true) {

    $prime = getNextPrime($start);
    $start = $prime;

    if($prime > 2000000) {
        break;
    }
    $res = bcadd($res, $prime);
}

echo $res;
