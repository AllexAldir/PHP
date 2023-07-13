<?php

class Cliente
{
	public $nome = 'teste'; //-> visibilidade do atributo
	public int $idade = 25;

	public function testeMetodo()
	{
		echo "Tetse de classe: {$this->idade}";//Acessa um membro do objeto
	}

	
}

$C1 = new Cliente(); //-> criando uma classe
//$C1->testeMetodo(); //-> acessando matodo dentro da classe
$C1->nome = 'Novo valor'; //-> Reatribuindo valor para o atributo
$C1->idade = 23; //-> Reatribuindo valor para o atributo
$C1->testeMetodo();