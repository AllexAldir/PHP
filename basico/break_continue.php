<div id="con">Aulas</div>
<?php
$cont = 1;

// for (;;) {
// 	//-> laço infinito

// 	//echo "{$cont} \r\n <br>";
// 	$cont++;

// 	if ($cont > 40) {
// 		break;
// 	}
// };

$array = [
	'AAA',
	'BBB',
	'CCC',
	'DDD',
	'EEE',
];

for ($i = 0; $i < count($array); $i += 2) {
	echo "{$array[$i]} \r\n ";

};
