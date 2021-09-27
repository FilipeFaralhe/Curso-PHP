<h1 class="title-panel">Switch</h1>

<?php
$categoria = '';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
  $carro = 'Mercedes';
  $preco = 250000;
} else if($categoria === 'SUV') {
  $carro = 'Renegade';
  $preco = 80000;
} else if($categoria === 'Sedan') {
  $carro = 'Etios';
  $preco = 55000;
} else {
  $carro = 'Mobi';
  $preco = 33000;
}
//Formatando a variável preco com number_format(quantidadeDeDecimal, separadorDeDecimal, separadorDeMilhares)
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";


// Refatorando em Switch case

$categoriaSwitch = 'LUXO';
switch (strtolower($categoriaSwitch)) {
  case 'luxo':
    $carroSwitch = 'Mercedes';
    $precoSwitch = 250000;
    break; // break é usado para sair do bloco switch
  case 'suv':
    $carroSwitch = 'Renegade';
    $precoSwitch = 80000;
    break;
  case 'sedan':
    $carroSwitch = 'Etios';
    $precoSwitch = 55000;
    break;
  default:
    $carroSwitch = 'Mobi';
    $precoSwitch = 33000;
}

$precoFormatado = number_format($precoSwitch, 2, ',', '.');
echo "<p>Carro: $carroSwitch<br>Preço: R$ $precoFormatado</p>";