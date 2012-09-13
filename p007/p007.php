<?php
require_once '../functions.php';

$start = 2;
for($i = 2; $i <= 10001; $i++) {

    $prime = getNextPrime($start);
    $start = $prime;
}

echo $prime;