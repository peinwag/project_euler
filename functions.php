<?php

/*
 *  Helper function collection for project euler problems
 */

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
