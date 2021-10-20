<h1 class="title-panel">Construtor e Destrutor</h1>

<?php
class Pessoa1 {
  public $nome;
  public $idade;

  // construtor no php é obrigatório começar com __
  // o método é chamado quando chamamos a palavra reservada new + a classe
  function __construct($novoNome, $novaIdade){
    echo 'Construtor invocado! <br>';
    $this->nome = $novoNome;
    $this->idade = $novaIdade;
  }

  function __destruct() {
    echo 'Objeto morreu';
  }

  public function apresentar() {
    return "Nome: $this->nome <br> Idade: $this->idade anos";
  }
}

$pessoa1 = new Pessoa1('Filipe', 18);
echo $pessoa1->apresentar() . "<br>";
print_r($pessoa1);
echo '<br>';

/*
  variável será liberada da sua referencia, logo ela não vai mais existir, quando chamamos
  o unset ou colocamos a instância como null, ela ira ativa o destrutor da classe.
*/
unset($pessoa1);

echo '<hr>';

$pessoa2 = new Pessoa1('Filipe', 18);
echo $pessoa2->apresentar() . "<br>";
print_r($pessoa2);
echo '<br>';
$pessoa2 = null;




