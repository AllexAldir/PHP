<?php

//-> Conceitos de interaface

//-> Tipagem para ser implementadas nas classes:

//-> Relação de 1-1

interface animal
{
	function mamar();
}
interface Animal_Marinho extends animal
{
	function nadar();
}

class Animal1 implements Animal_Marinho
{
	public function nadar()
	{
		echo 'nadando' . "\n";
	}

	public function mamar()
	{
		echo 'mamifero';
	}
}

$cl1 = new Animal1();

$cl1->nadar();
