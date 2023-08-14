<?php

//-> Utilizando conceitos de herança:

//use Pessoa as GlobalPessoa;

class Pessoa
{
	//-> Declaração de variáveis
	public $nome;
	public $idade;
	public $sobrenome;

	function __construct(string $nome, int $idade, string $sobrenome)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->sobrenome = $sobrenome;
	}

	public function showAll(): void
	{
		echo("{$this->nome} \n");
		echo("{$this->idade} \n");
		echo("{$this->sobrenome}");
	}
}


$P1 = new Pessoa('Gabriel',30,'teste');

$P1->showAll();
//echo("{$P1->nome}");