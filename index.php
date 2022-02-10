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
            <div class="module yellow">
              <h3>6. Repetições</h3>
              <ul class="yellow">
                <li><a href="exercises.php?dir=repetitions&file=for">For</a></li>
                <li><a href="exercises.php?dir=repetitions&file=challenge_for">Desfio For</a></li>
                <li><a href="exercises.php?dir=repetitions&file=foreach">Foreach</a></li>
                <li><a href="exercises.php?dir=repetitions&file=break_continue">Break e Continue</a></li>
                <li><a href="exercises.php?dir=repetitions&file=challenge_print">Desafio impressão</a></li>
                <li><a href="exercises.php?dir=repetitions&file=while">While/Do While</a></li>
                <li><a href="exercises.php?dir=repetitions&file=challenge_table">Desafio tabela</a></li>
                <li><a href="exercises.php?dir=repetitions&file=challenge_table2">Desafio tabela 2</a></li>
              </ul>
            </div>
            <div class="module dark-blue">
              <h3>7. Funções</h3>
              <ul class="dark-blue">
                <li><a href="exercises.php?dir=functions&file=scope">Função e Escopo</a></li>
                <li><a href="exercises.php?dir=functions&file=args_return">Argumentos e retorno</a></li>
                <li><a href="exercises.php?dir=functions&file=challenge_palindrome">Desafio Palíndromo</a></li>
                <li><a href="exercises.php?dir=functions&file=args_variables">Argumentos Variáveis</a></li>
                <li><a href="exercises.php?dir=functions&file=args_pattern">Argumentos Padrões</a></li>
                <li><a href="exercises.php?dir=functions&file=using_types">Declarando Tipos</a></li>
                <li><a href="exercises.php?dir=functions&file=anonymous_functions">Funções Anonimas</a></li>
                <li><a href="exercises.php?dir=functions&file=closure_callable">Closure Callable</a></li>
                <li><a href="exercises.php?dir=functions&file=recursion">Recursividade</a></li>
                <li><a href="exercises.php?dir=functions&file=challenge_recursion">Desafio Recursão</a></li>
                <li><a href="exercises.php?dir=functions&file=return_function">Retornando Função</a></li>
                <li><a href="exercises.php?dir=functions&file=map_filter">Map e Filter</a></li>
              </ul>
            </div>
            <div class="module black">
              <h3>8. Paradigma O.O</h3>
              <ul class="black">
                <li><a href="exercises.php?dir=class_objects&file=class">Primeira Classe</a></li>
                <li><a href="exercises.php?dir=class_objects&file=challenge_class_date">Desafio Data</a></li>
                <li><a href="exercises.php?dir=class_objects&file=constructor_destructor">Construtor e Destrutor</a></li>
                <li><a href="exercises.php?dir=class_objects&file=heritage">Herança</a></li>
                <li><a href="exercises.php?dir=class_objects&file=visibility">Visibilidade</a></li>
                <li><a href="exercises.php?dir=class_objects&file=static">Membros Estáticos</a></li>
                <li><a href="exercises.php?dir=class_objects&file=interface">Interface</a></li>
                <li><a href="exercises.php?dir=class_objects&file=abstract">Classe Abstrata</a></li>
                <li><a href="exercises.php?dir=class_objects&file=challenge_errors">Desafio erros</a></li>
                <li><a href="exercises.php?dir=class_objects&file=final">Modificador Final</a></li>
                <li><a href="exercises.php?dir=class_objects&file=traits_01">Traits #01</a></li>
                <li><a href="exercises.php?dir=class_objects&file=traits_02">Traits #02</a></li>
                <li><a href="exercises.php?dir=class_objects&file=magic_methods">Métodos Mágicos</a></li>
                <li><a href="exercises.php?dir=class_objects&file=polymorphism">Polimorfismo</a></li>
              </ul>
            </div>
            <div class="module light-blue ">
              <h3>9. Includes</h3>
              <ul class="light-blue ">
                  <li><a href="exercises.php?dir=includes&file=include">Include</a></li>
                  <li><a href="exercises.php?dir=includes&file=include_function">Include em função</a></li>
                  <li><a href="exercises.php?dir=includes&file=include_require">Include VS Require</a></li>
                  <li><a href="exercises.php?dir=includes&file=require_return">Require VS Return</a></li>
                  <li><a href="exercises.php?dir=includes&file=include_once_and_require_once">Include_once & Require_once</a></li>
              </ul>
            </div>
            <div class="module energos">
              <h3>10. Namespace</h3>
              <ul class="energos">
                  <li><a href="exercises.php?dir=namespace&file=basic">Exemplo Básico</a></li>
                  <li><a href="exercises.php?dir=namespace&file=sub_namespace">Sub-Namesapces</a></li>
                  <li><a href="exercises.php?dir=namespace&file=use_as">Use/As</a></li>
              </ul>
            </div>
            <div class="module energos">
              <h3>11. Sessões e Cookies</h3>
              <ul class="energos">
                <li><a href="exercises.php?dir=section&file=basic_section">Básico de sessões</a></li>
                <li><a href="exercises.php?dir=section&file=basic_section_change">Básico de alterar sessões</a></li>
              </ul>
            </div>
              <div class="module energos">
                  <h3>11. BD</h3>
                  <ul class="energos">
                      <li><a href="exercises.php?dir=db&file=criar_banco">Criar Banco</a></li>
                      <li><a href="exercises.php?dir=db&file=criar_tabela">Criar Tabela</a></li>
                      <li><a href="exercises.php?dir=db&file=inserir_1">Inserir Registro #01</a></li>
                      <li><a href="exercises.php?dir=db&file=consultar">Consultar BD</a></li>
                      <li><a href="exercises.php?dir=db&file=excluir_1">Excluir Registro #01</a></li>
                      <li><a href="exercises.php?dir=db&file=excluir_2">Excluir Registro #02</a></li>
                      <li><a href="exercises.php?dir=db&file=inserir_2">Inserir Registro #02</a></li>
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