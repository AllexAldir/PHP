<?php

trait teste1
{
	public function validacao($qualquer)
	{
		return isset($qualquer) && $qualquer !== ''; //-> isset verifica se a variável é nula
	}
}

trait teste2
{
	public function validacao($qualquer)
	{
		return isset($qualquer) && trim($qualquer); //-> isset verifica se a variável é nula
	}
}

class C
{
	use teste1, teste2 {
		teste1::validacao insteadof teste2; //-> Utiliza esse ao invés do outro
	}
}

$teste = new C();

print_r($teste->validacao('ok'));