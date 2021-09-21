<h1 class="title-panel">Tipo String</h1>

<?php
echo 'Eu sou uma string';
echo '<br>';

// calculá o tamanha da string como 10, pois não consegue ler o padrão utf-8 e acaba contando o acento como um caractere
var_dump("Eu também");
echo '<br>';

// Concatenação
echo ("Nós também" . ' somos');
echo '<br>', "Também aceito", "virgulas"; // mas somente o comando echo aceitas virgulas para concatenação
echo '<br>';

//Consegue usar aspas simples dentro de aspas simples utilizando o escape
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\"";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');// Deixa todas a letras em maiúsculo
echo '<br>' . strtolower('MINIMIZADO');// Deixa todas as letas em minúsculo
echo '<br>' . ucfirst('Só a primeira letra'); // Deixa somente a primeira letra maiúscula
echo '<br>' . ucwords('Todas as palavras'); // Deixa a primeira letra de cada palavra em maiúsculo
echo '<br>' . strlen('Quantas letras?'); // retorna a quantidade de caracteres

// Faz com que reconheça o caractere com acentuação fazendo com que pare de contar o acentua como um caractere
echo '<br>' . mb_strlen('Eu também', "utf-8");

/*
 * Seleciona parte da string através dos valores passado como argumentos. Lembrando que o segundo
 * argumento sempre volta uma casa
 * */
echo '<br>' . substr('Só uma parte mesmo', 7, 6);

// caso não coloque o segundo argumento, ele pega da posição 7 e vai até o final da string
echo '<br>' . substr('Só uma parte mesmo', 7);

// Substitui uma string pela outra
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');