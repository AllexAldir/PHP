<?php

namespace Users;

//-> Utilizando Trait:

trait ATR1 //-> Caracteríscas específicas as quais são passadas para um objeto
{
	public function sayHello(): void
	{
		echo ('Hello World');
	}
}
trait ATR2 //-> Caracteríscas específicas as quais são passadas para um objeto
{
	public function sayHello(): void
	{
		echo ('Hello World2');
	}
}

class Pessoa
{
	public $nome;
	public $idade;

	function __construct(string $nomeUser, string $idadeUser)
	{
		$this->nome = $nomeUser;
		$this->idade = $idadeUser;
	}

	function ok()
	{
		return 'ok';
	}
}

class Usuario extends Pessoa
{
	public $login;

	use ATR1, ATR2 {
		ATR1::sayHello insteadof ATR2;
	} //-> Utilizando características

	function __construct($nome, $idade, $login)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->login = $login;
	}

	function apresentar()
	{
		return parent::ok() . 'ok'; //-> Retorna com o conteúdo do método do pai
	}
}

$rs = new Pessoa('Lucas', 78);

$user = new Usuario('Tiago', 8, 'teste');

//$resultadoUser = $user->sayHello();
?>

