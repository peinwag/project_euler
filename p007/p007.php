<?php

define('LIBRARY_MODE', 1);

require_once '../p003/p003.php';

$start = 2;
for($i = 2; $i <= 10001; $i++) {

    $prime = getNextPrime($start);
    $start = $prime;
}

echo $prime;