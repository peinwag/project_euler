<?php

$res = 0;

for($i=1; $i <= 1000; $i++) {


	$temp = bcpow($i, $i);
	$res = bcadd($res, $temp);
}

echo substr($res, -10);


