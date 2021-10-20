<h1 class="title-panel">Primeira Classe</h1>

<?php
// Colocamos a primeira letra de uma classe, como maiúscula
class Cliente {
  // Atributos
  public $nome = 'Anônimo'; //public mostra a visibilidade do atributo
  public $idade = 18;

  // Métodos
  //public mostra a visibilidade do método
  public function apresentar() {
    return "Nome: $this->nome<br>Idade: $this->idade"; // this é usado para expressar o próprio objeto
  }
}

// A palavra reservada 'new' é usada para gerar uma nova instância da classe Cliente
$cliente1 = new Cliente();
$cliente1->nome = 'Filipe';
$cliente1->idade = 22;
echo $cliente1->apresentar();

echo '<br>';

$cliente2 = new Cliente();
$cliente2->nome = "Ana Maria";
$cliente2->idade = 25;
echo $cliente2->apresentar();