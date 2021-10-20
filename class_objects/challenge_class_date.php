<h1 class="title-panel">Desafio Data</h1>

<?php
class Data{
  public $dia = 1;
  public $mes = 1;
  public $ano = 1970;

  public function apresentar() {
    return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
  }
}

$dataNatal = new Data();
$dataNatal->dia = 25;
$dataNatal->mes = 12;
$dataNatal->ano = 2021;
echo $dataNatal->apresentar() . "<br>";

$aniversario = new Data();
$aniversario->dia = 24;
$aniversario->mes = 8;
$aniversario->ano = 2021;
echo $aniversario->apresentar() . "<br>";