<h1 class="title-panel">Interpolação</h1>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // Não interpreta $numero como uma variável
echo "<br> $numero"; // Interpreta $numero como uma variável, mas somente ela não aceitando somos e derivados

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
// echo "<br>Eu tenho 5 $objetos"; erro pois não existe a variável objetos
echo "<br>Eu tenho 5 {$objeto}s.";