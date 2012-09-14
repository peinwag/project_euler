<?php
for($a = 1; $a < 998; $a++) {

	for($b = 1; $b < 999; $b++) {

		$c = 1000 - $a -$b;

		if (($a*$a) + ($b*$b)  == ($c*$c)) {

			echo $a*$b*$c;
		}
	}
}