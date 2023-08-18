<?php

//-> Criando um construtor:

class Pessoa
{
	public $nome;
	public $idade;
	public $sobrenome;

	function __constructor($novonome, $idade = 18, $sobrenome)
	{
		$this->nome = $novonome;
		$this->idade = $idade; //->Atribuindo valores
		$this->sobrenome = $sobrenome;
	}

	function __destruct2()
	{
		echo 'morreu';
	}

	function viewName()
	{
		echo "Helle: {$this->nome}";
	}
}

//-> Instanciando:

$P1 = new Pessoa('teste', 22, 'sobrenomeTeste');
$P1->viewName();


class cadastro
{
	public $name;
	public $sobrenome;

	function __construct($name, $sobrenome)
	{
		$this->name = $name;
		$this->name = $sobrenome;
	}

	public function viewName(): void
	{
		echo($this->name);
	}
}

$teste1 = new cadastro('teste', 'sobrenome_teste');

$teste1->viewName();