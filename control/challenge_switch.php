<h1 class="title-panel">Desafio Switch</h1>

<style>
  select {
    height: 40px;

    font-size: 1.5rem;
    font-weight: bold;

    border: 0;
    border-bottom: 2px solid #2980b9;
  }

  button {
    height: 50px;
    width: 200px;

    color: white;
    background: #2980b9;

    font-weight: bold;
    font-size: 2rem;

    border: 0;
    border-radius: 0.5rem;
  }
</style>

<form action="#" method="post">
  <input type="text" name="param">
  <select name="conversao" id="conversao">
    <option value="km-milha">Km > Milha</option>
    <option value="milha-km">Milha > Km</option>
    <option value="metro-km">Metros > Km</option>
    <option value="km-metro">Km > Metros</option>
    <option value="c-f">Graus Celsius > Grau Fahrenheit</option>
    <option value="f-c">Grau Fahrenheit > Graus Celsius</option>
  </select>
  <button>Calcular</button>
</form>

<?php

$conversao = $_POST['conversao'];
$value = $_POST['param'];

switch (strtolower($conversao)) {
  case 'km-milha':
    $convert = $value * 0.621371;
    echo "km -> milha: $convert";
    break;
  case 'milha-km':
    $convert =  $value * 1.60934;
    echo "milha -> km: $convert";
    break;
  case 'metro-km':
    $convert =  $value * 0.001;
    echo "metro -> km: $convert";
    break;
  case 'km-metro':
    $convert =  $value * 1000;
    echo "metro -> km: $convert";
    break;
  case 'c-f':
    $convert =  ($value * 9/5) + 32;
    echo "Graus Celsius -> Grau Fahrenheit: $convert";
    break;
  case 'f-c':
    $convert =  ($value - 32) * 5/9;
    echo "Grau Fahrenheit -> Graus Celsius : $convert";
    break;
  default:
    echo 'opção não disponível';
}