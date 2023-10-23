<?php

class Comida
{
	public $peso;
}

class Arroz extends Comida
{
}

class Feijao extends Comida
{
}

class Pessoa
{
	public $peso;

	function __construct($peso)
	{
		$this->peso = $peso;
	}

	function comer(Arroz $comida)
	{
		$this->peso += $comida->peso;
		echo "O peso é: {$this->peso}";
	}
}

$c1 = new Arroz();
$c1->peso = 45.7;

$pessoa = new Pessoa(80);

$pessoa->comer($c1);
