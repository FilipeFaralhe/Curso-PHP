<h1 class="title-panel">Variáveis Variáveis</h1>

<?php
/*
 * Pega o valor da variável 'valorA' e substituiu pelo $a no $$a transformando o nome da variável em $valorA
  $a = 'valorA';

  $$a -> $valorA = 'valorB';

*/

$a = 'valorA';
$$a = 'valorB';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';

$epa = 'opa';
$opa = 'vish';
$vish = 'eita';
echo "$epa {$$epa} {$$$epa}";