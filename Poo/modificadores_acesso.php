<?php

//-> Modificadores de acesso:

class A
{
  public $nome = 'publico';
  protected $idade = 'protegido';
  private $sobrenome = 'privado';


  function showAtrr(): void
  {
    echo ("O nome é: {$this->nome}");
    echo ("O idade é: {$this->idade}");
    echo ("O sobrenome é: {$this->sobrenome}"); //-> Método para mostrar um atributo privado
    $this->privada(); //-> Forma de exibir o conteúdo de uma função privada
  }

  private function privada(): void
  {
    echo (" Privado function");
  }
}

$classe1 = new A;

//$classe1->showAtrr();

//-> Passando de herança para uma outra classe:

class B extends A
{
  private $sobrenome_B = 'Sobrenome_B';

  function showAtrr(): void
  {
    //parent::showAtrr(); -> Acessa os métodos do pai
    echo ("O nome é: {$this->nome}");
    echo ("O idade é: {$this->idade}");
    echo ("O sobrenome é: {$this->sobrenome_B}"); //-> Aqui não é possível exibir o conteúdo da classe A
  }
}

$classe2 = new B;
$classe2->showAtrr();