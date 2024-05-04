<?php namespace Geral; ?>

<?php
/*
Como exemplo foi criado um nameSpace "Geral" e posteriormente outros seguindo a sua hierarquia tendo
em vista "Geral" como o pai.
Declarado uma "constante" em cada um deles.
*/

const constante = 123; //Geral
echo __namespace__ . constante;

namespace Geral\Principal; //Principal
const constante = 324;
echo __namespace__ . constante;


namespace Geral\Principal\Auxiliar; //Auxiliar
const constante = 456;
echo __namespace__ . constante;


echo 'Acesso esse nameSpace' . \Geral\Principal\Auxiliar\constante;
