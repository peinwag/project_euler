<?php

if(!file_exists('goutte.phar')) {

	die("\ngoutte is missing! download it here: https://raw.github.com/fabpot/Goutte/master/goutte.phar\n");
}

require_once 'goutte.phar';
use Goutte\Client;

if(!isset($argv[1])) {

	die("\nMissing parameters! call php buildStructure.php <int>\n");
}

$problem = (int)$argv[1];

if($problem < 10) {
	$p = 'p00' . $problem;
} elseif ($problem < 100) {
	$p = 'p0' . $problem;
}else {
	$p = 'p0' . $problem;
}

if(is_dir($p)) {
	die("\nStructure already created for that problem!\n");
}

$client = new Client();
$crawler = $client->request('GET', 'http://projecteuler.net/problem=' . $problem);
$node = $crawler->filter('.problem_content');

if(!$node->count()) {

	die("\nThat problem doesnt exist!\n");
} 

mkdir($p);
file_put_contents($p . '/problem.md', $node->text());
file_put_contents($p . '/' . $p . '.php', '<?php');
echo "\nstructure for problem: '$problem' created!\n";