<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Curso PHP</title>
</head>
  <body>
     <header class="header">
       <h1 id="title">Curso PHP</h1>
       <h2 id="description">Índice dos Exercícios</h2>
     </header>
      <main class="main">
        <div class="content">
          <nav class="modules">
            <div class="module green">
              <h3>1. Básico</h3>
              <ul class="green">
                <li><a href="exercises.php?dir=basic&file=hello">Olá PHP</a></li>
                <li><a href="exercises.php?dir=basic&file=html">Integração HTML</a></li>
                <li><a href="exercises.php?dir=basic&file=css">Integração CSS</a></li>
                <li><a href="exercises.php?dir=basic&file=comments">Comentários PHP</a></li>
                <li><a href="exercises.php?dir=basic&file=challenge">Desafio PHP</a></li>
              </ul>
            </div>
            <div class="module red">
              <h3>2. Tipos</h3>
              <ul class="red">
                <li><a href="exercises.php?dir=types&file=int">Tipo Inteiro</a></li>
                <li><a href="exercises.php?dir=types&file=float">Tipo Float</a></li>
                <li><a href="exercises.php?dir=types&file=arithmetic">Operações Aritméticas</a></li>
                <li><a href="exercises.php?dir=types&file=challenge_precedence">Desafio Precedência</a></li>
                <li><a href="exercises.php?dir=types&file=string">Tipo String</a></li>
                <li><a href="exercises.php?dir=types&file=challenge_string">Desafio String</a></li>
                <li><a href="exercises.php?dir=types&file=booleano">Tipo Booleano</a></li>
                <li><a href="exercises.php?dir=types&file=conversions">Conversões</a></li>
              </ul>
            </div>
            <div class="module purple">
              <h3>3. Variáveis</h3>
              <ul class="purple">
                <li><a href="exercises.php?dir=variables&file=basic">Variáveis</a></li>
                <li><a href="exercises.php?dir=variables&file=challenge_equation">Desafio Equação</a></li>
                <li><a href="exercises.php?dir=variables&file=assignment">Atribuição</a></li>
                <li><a href="exercises.php?dir=variables&file=interpolation">Interpolação</a></li>
                <li><a href="exercises.php?dir=variables&file=variables_variables">Variáveis Variáveis</a></li>
                <li><a href="exercises.php?dir=variables&file=challenge_variables">Desafio Variáveis</a></li>
                <li><a href="exercises.php?dir=variables&file=value_reference">Valor VS Referência</a></li>
                <li><a href="exercises.php?dir=variables&file=constant">Constante</a></li>
              </ul>
            </div>
            <div class="module dark-grey">
              <h3>4. Controle</h3>
              <ul class="dark-grey">
                <li><a href="exercises.php?dir=control&file=if_else">IF ELSE</a></li>
                <li><a href="exercises.php?dir=control&file=relational_operators">Operadores Relacionais</a></li>
                <li><a href="exercises.php?dir=control&file=challenge_pi">Desafio PI</a></li>
                <li><a href="exercises.php?dir=control&file=logical_operators">Operadores Lógicos</a></li>
                <li><a href="exercises.php?dir=control&file=challenge_logical_operators">Desafio Operadores Lógicos</a></li>
                <li><a href="exercises.php?dir=control&file=ternary_operator">Operador Ternário</a></li>
                <li><a href="exercises.php?dir=control&file=switch">switch</a></li>
                <li><a href="exercises.php?dir=control&file=challenge_switch">Desafio Switch</a></li>
              </ul>
            </div>
            <div class="module orange">
              <h3>5. Array</h3>
              <ul class="orange">
                <li><a href="exercises.php?dir=array&file=basic">Array</a></li>
                <li><a href="exercises.php?dir=array&file=map">Mapa Array</a></li>
                <li><a href="exercises.php?dir=array&file=challenge_index">Desafio Index</a></li>
                <li><a href="exercises.php?dir=array&file=challenge_months">Desafio Meses</a></li>
                <li><a href="exercises.php?dir=array&file=Operation">Operação com Array</a></li>
                <li><a href="exercises.php?dir=array&file=challenge_sort">Desafio Sorteio</a></li>
                <li><a href="exercises.php?dir=array&file=multi">Array Multidimensional</a></li>
                <li><a href="exercises.php?dir=array&file=array_constants">Array Constantes</a></li>
                <li><a href="exercises.php?dir=array&file=get">Usando $_GET</a></li>
                <li><a href="exercises.php?dir=array&file=post">Usando $_POST</a></li>
                <li><a href="exercises.php?dir=array&file=array_comparison">Array Comparação</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </main>
      <footer class="footer">
          <p id="copy">Filipe Freitas Faralhe © <?= date('Y'); ?><p>
      </footer>
  </body>
</html>