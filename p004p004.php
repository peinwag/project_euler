<?php
$palindroms = array();

for($i = 100; $i <= 999; $i++) {

	$palindrom = generatePalindrom((string)$i);
	if($palindrom) {

		$palindroms[] = generatePalindrom((string)$i);
	}
}

echo max($palindroms);

function generatePalindrom($term) {

	$digit_1 = $term[0];
	$digit_2 = $term[1];
	$digit_3 = $term[2];

	$palindrom = $digit_1 . $digit_2 . $digit_3 . $digit_3 . $digit_2 . $digit_1;

	if((int)$palindrom > 998001) {
		return null;
	}

	for($i=100; $i<999; $i++) {

		if($palindrom % $i == 0){

			$div = $palindrom / $i ;
			if($div >= 100 && $div <= 999) {

				return $palindrom;
			}
		}
	}

	return null;
}