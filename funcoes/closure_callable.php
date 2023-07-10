<?php
//-> callable é quando as operações são chamadas:

$callabled = function () {
	echo 'teste';
};

echo is_callable($callabled) ? 'sim' : 'não';

