<h1 class="title-panel">Herança</h1>

<?php
class Pessoa {
  public $nome;
  public $idade;

  function __construct($nome, $idade) {
    $this->nome = $nome;
    $this->idade = $idade;
    echo 'Pessoa Criado!';
  }

  function __destruct() {
    echo 'Pessoa diz: Tchau!!';
  }

  public function apresentar() {
    return  "{$this->nome}, {$this->idade} anos";
  }
}

/* Fazendo Herança coma classe Pessoa, tornando a classe
 Usuaria um subclasse de Pessoa(superclasse)
*/
class Usuario extends Pessoa {
  public $login;

  public function __construct($nome, $idade, $login) {
    parent::__construct($nome, $idade);
    $this->login = $login;
    echo 'Usuário Criado!';
  }

  function __destruct() {
    echo 'Usuário diz: Tchau!!';
    // chamo tanto o destrutor da classe usuario(filho), como o destrutor da classe Pessoa(pai)
    parent::__destruct();
  }

  public function apresentar() {
    // parent::apresentar() faz com que reuse a função apresentar da classe pai
    return "@{$this->login}: " . parent::apresentar();
  }
}

$usuario = new Usuario('Filipe', 21, 'filipe_gato');
echo '<br>';
echo $usuario->apresentar() . "<br>";
unset($usuario);

