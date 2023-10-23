<?php

class estudos
{
	public $nome;
	public $idade;
	private $data;

	public function __construct($nome, $idade)
	{
		echo ('Instanciando contrutor' . "\n");
		$this->nome = $nome;
		$this->idade = $idade;
	}

	public function __toString()
	{
		//-> Transforma o objeto em uma string
		return "{$this->nome} tem {$this->idade} anos.";
	}

	public function apresentar()
	{
		echo $this; //-> chama o toString por si só
	}

	public function  __get($name)
	{
		echo "Acessando o attr {$name} privado";
	}

	// public function  __set($name, $valor)
	// {
	// 	//->Atribuir valores ou mostra-los
	// 	echo "modificando {$name} ou {$valor}";
	// }

	public function  __call($metodo, $params)
	{
		//->Utiliza quando os métodos não existem
		echo "Acesso o método que não exist: {$metodo} {\n}";
		echo ("Acessando os params: {\n}");
		print_r("Acessando os params: {$params}");
	}

	//-> Exemplos de como utilizar

	public function __set($name, $value)
	{
		//-> Dinâmica aplicada para que o $name seja a chave e $valur o valor
		echo "Setting '$name' to '$value'\n";
		$this->data[$name] = $value;
		print_r($this->data);
	}

	public function __isset($name)
	{
		//-> verifica se a variável é ja existe no array
		echo "Is '$name' set?\n";
		return isset($this->data[$name]);
	}
}

$call = new estudos('Teste', 40);

//$call->apresentar(); //-> Chama toString

//$call->namecompleto = 'Teste do';

//$call->exec('Teste', [1, 1, 2, 2]);
$call->Teste = 'Teste do set';
if (isset($call->Teste)) {
	//-> Verificando se já existe dentro do array
	echo 'Já existe';
} else {
	$call->Teste2 = 1;
}
