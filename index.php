<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="recursos/css/estilo.css">
  <title>Curso PHP</title>
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice dos Exercícios</h2>
  </header>
  <main class="principal">
    <div class="conteudo">
      <nav class="modulos">
        <div class="modulo verde">
          <h3>Módulo 01</h3>
          <ul>

            <li><a href="exercicio.php?dir=PHP&file=exercicio.php">Exercício geral</a></li>
            <li><a href="basico/ex01.php?dir=basico&file=ex01.php">Exercício A</a></li>
            <li><a href="basico/html_php.php?dir=basico&file=html_php.php">HTML</a></li>
            <li><a href="basico/comentarios_php.php?dir=basico&file=comentarios_php.php">Comentarios</a></li>
            <li><a href="desafio.php/des01.php?dir=desafio.php&file=des01.php">Desafios PHP</a></li>

          </ul>
        </div>
        <div class="modulo vermelho">
          <h3>Módulo 02</h3>
          <ul>

            <li><a href="types.php/int.php?dir=types.php&file=int.php">Type_int</a></li>
            <li><a href="types.php/float.php?dir=types.php&file=float.php">Type_float</a></li>
            <li><a href="types.php/op_aritimeticas.php?dir=types.php&file=op_aritimeticas.php">OP_Ari</a></li>
            <li><a href="desafio.php/des02.php?dir=desafio.php&file=des02.php">Desafio Prece</a></li>
            <li><a href="string.php?dir=PHP&file=string.php">String_PHP</a></li>
            <li><a href="desafio.php/desafio_string.php?dir=teste&file=testgad">Desafio PHP</a></li>
            <li><a href="basico/type_boolean.php?dir=basico&file=type_boolean">Tipo Boolean</a></li>
            <li><a href="basico/convesoes.php?dir=basico&file=conversoes">Conversoes PHP</a></li>

          </ul>
        </div>
        <div class="modulo laranja">
          <h3>Módulo 03</h3>
          <ul>

            <li><a href="basico/variaveis.php?dir=basico&file=variaveis.php">Variáveis</a></li>
            <li><a href="desafio.php/desafio_var.php?dir=desafio.php&file=desafio_variaveis">Variáveis Desafio</a></li>
            <li><a href="basico/atribuicao.php?dir=basico&file=atribuicao.php">Atribuicao Var</a></li>
            <li><a href="basico/interpolacao.php?dir=basico&file=interpolacao.php">Interpolação PHP</a></li>
            <li><a href="basico/variaveis_variaveis.php?dir=basico&file=variaveis_variaveis.php">Variaveis Variaveis</a></li>
            <li><a href="basico/atribuicao_referencia.php?dir=basico&file=variaveis_variaveis.php">Atribuição Referência</a></li>
            <li><a href="basico/constantes.php?dir=basico&file=constantes.php">Constantes</a></li>


          </ul>
        </div>
        <div class="modulo azul">
          <h3>Módulo 03</h3>
          <ul>

            <li><a href="basico/if_else.php?dir=basico&file=if_else.php">If Else</a></li>
            <li><a href="basico/operadores_relacionais.php?dir=basico&file=operadores_relacionais.php">Operadores Relacionais</a></li>
            <li><a href="basico/operadores_relacionais.php?dir=basico&file=operadores_relacionais.php">Spaceship</a></li>
            <li><a href="desafio.php/desafio_pi.php?dir=basico&file=operadores_relacionais.php">desafio</a></li>
            <li><a href="basico/op_logicos.php?dir=basico&file=op_logicos.php">Oper.Logicos</a></li>
            <li><a href="desafio.php/des_form.php?dir=desafio&file=op_logicos.php">Desa_form</a></li>
            <li><a href="basico/operador_ternario.php?dir=operador&file=op_logicos.php">Oper.ternario</a></li>
            <li><a href="basico/switch.php?dir=basico&file=switch.php">Switch Case</a></li>
            <li><a href="desafio.php/des_switch.php?dir=desafio&file=switch.php">Desafio Switch</a></li>


          </ul>
        </div>
        <div class="modulo roxo">
          <h3>Módulo 04</h3>
          <ul>

            <li><a href="basico/array.php?dir=basico&file=array.php">Array</a></li>
            <li><a href="basico/opArray.php?dir=basico&file=array.php">opArra</a></li>
            


          </ul>
        </div>
      </nav>
    </div>
  </main>
  <footer class="rodape">
    Curso <?= date('Y'); ?>
  </footer>
</body>

</html>