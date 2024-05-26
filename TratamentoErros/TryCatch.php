<?php
/*

Serve para tratar possíveis de código

*/

try {
  echo intdiv(7,0);
} catch (Error $e) {
  echo "Erro gerado pela divisão " . $e;
}

try {
  throw new Exception('Um execessão');
  echo intdiv(7,0);
} catch (DivisionByZeroError $e) {
  echo "Erro gerado pela divisão " . $e;
} catch (Throwable $e) {
  echo "Erro gerado execessão " . $e->getMessage(); //Captura a mensagem
} finally {
  echo "Sempre séra executado";
}