<?php

//-> Gerando uma classe abstrata
/*
  Não poderá ser instânciada
  Poderá ser herdada
*/
abstract class Abstrata
{
  abstract public function mt01();
  abstract public function mt02();
}

//-> Necessita de classe concreta para utilizar os mátodos abstratos

abstract class Abstrata2 extends Abstrata
{
  public function mt01()
  {
    echo ('OK 1');
  }

  public function mt02()
  {
    echo ('OK 2');
  }

  abstract public function mt03();
}

class Concreta extends Abstrata2
{
  
  public function mt03()
  {
    echo ('OK 3');
  }
  
  public function mt04()
  {
    parent::mt01(); //-> Acessando método da classe pai
  }

  public function mt05()
  {
    parent::mt02(); //-> Acessando método da classe pai
  }
}

$clase1 = new Concreta;

//$clase1->mt04();

var_dump($clase1 instanceof Abstrata); //-> Se é uma instância das outras classes pai