<?php
$sumOfSquares = 0;
$squareOfTheSum = 0;

for($i = 1; $i <= 100; $i++) {

	$sumOfSquares = bcadd($sumOfSquares, bcpow($i, 2));
	$squareOfTheSum = bcadd($squareOfTheSum, $i);
}

$squareOfTheSum = bcpow($squareOfTheSum, 2);

echo bcsub($squareOfTheSum, $sumOfSquares);
