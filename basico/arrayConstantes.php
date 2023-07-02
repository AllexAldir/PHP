<?php

const frutas = ['teste1', 'teste2']; //-> array de forma constantes não pode alterar os valores 
const carros = [
  'modelo' => 'uno',
  'modelo2' => 'bmw',
]; //-> array de forma constantes não pode alterar os valores 

define('Cidade', ['fortaleza','maceió']);//-> Outra forma de declarar constantes

print_r(Cidade[0]);