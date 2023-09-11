<?php
//->Membros estáticos

class A
{
  public static $PI = 3.14; //-> Não poderá modificar o valor
  public $nome = 'ok';

  function show()
  {
    echo (self::$PI); //-> Acessar um valor estático
  }

  public static function staticFUnctions()
  {
    echo ('Hello');
  }
}


$cl1 = new A;

$cl1->show();
$cl1::staticFUnctions(); //-> Acessar uma funcão fora da classe