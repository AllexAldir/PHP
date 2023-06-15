<?php
//tipo boolean

echo var_dump(true) . '<br>';

echo is_bool(true) . '<br>'; //-> Para verificar se o valor é um boolean ou não

echo var_dump((bool)0) . '<br>'; //-> converte um numero para verdadeiro ou falso

echo var_dump(!'teste'); //-> Convertando valores para boolean
