<?php

trait validacao
{
	public function validarString($str)
	{
		return isset($str) && $str == '';
	}
}

trait validacao2
{
	private $teste = 'ok';

	public function validarString2($str)
	{
		return isset($str) && trim($str == '');
	}
}

//-> Utilizar um trait com "use":

class AB
{
	use validacao, validacao2;

	public function pegar()
	{
		echo($this->teste);
	}
}

$use = new AB();

//var_dump($use->validarString(''));
//echo($use->pegar());
$use->pegar();