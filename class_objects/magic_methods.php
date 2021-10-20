<h1 class="title-panel">Métodos Mágicos</h1>

<?php
class Pessoa2 {
  public $nome;
  public $idade;

  function __construct($nome, $idade){
    echo 'Construtor invocado!<br>';
    $this->nome = $nome;
    $this->idade = $idade;
  }

  function __destruct(){
    echo 'Objeto destruído! <br>';
  }

  // caso seja chamado alguma função que converta o objeto em string, ele chamara este método mágico
  public function __toString() {
    return "{$this->nome} tem {$this->idade} anos.";
  }

  public function apresentar() {
    return $this . '<br>';
  }

  // __get() é utilizado para ler dados de propriedades inacessíveis.
  public function __get($atributo) {
    echo "Lendo atributo não declarado: {$atributo}<br>";
  }

  // __set() é executado ao escrever dados em propriedades inacessíveis.
  public function __set($atributo, $valor) {
    echo "Alterando atributo não declarado: {$atributo}/{$valor}";
  }

  // __call() é disparado ao invocar métodos inacessíveis em um contexto de objeto.
  public function __call($metodo, $params) {
    echo "Acessando método inexistente método: '{$metodo}'";
    echo ", com os parâmetros ";
    print_r($params);
  }

  //__callStatic() é disparado quando invocando métodos inacessíveis em um contexto estático.
 /* public function __callStatic($metodo, $params) {
    echo "Acessando método inexistente método: {$metodo}, parâmetro: {$params}";
  }*/
}

$p1 = new Pessoa2('Filipe', 22); // chama o __construct
echo $p1->apresentar(); //objeto sendo convertido para string, chamará automaticamente o __toString
echo $p1 . '<br>';//objeto sendo convertido para string, chamará automaticamente o __toString
$p1->nome = "Pedro"; // altera normalmente, não chamando __set()
echo $p1->apresentar(); // chama o método sem executar o método mágico call()

echo '<br>';

$p1->nomeFilipe = "Cleyton"; //chama __get e __set()
$p1->imprimiAi(1, 'teste', true, [1, 2, 3]); //chama __call()
$p1 = null; // ou unset($p1) chama o destruct;
