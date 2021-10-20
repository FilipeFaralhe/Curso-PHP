<h1 class="title-panel">Interface</h1>

<?php
/*
 Todos os métodos das interfaces são públicos e não podem tem implementação,
 somente a definição do método.
*/
interface Animal {
  function respirar(): string; //retorna uma string
}

interface Mamifero {
  function mamar(): string; //retorna uma string
}

// Podemos fazer heranças de interface, como no exemplo abaixo:
interface Canino extends Animal{
  function latir(): string; //retorna uma string
  function correr(): string;
}

interface Felino extends Animal {
  function correr(): string;
}

/*
 Toda classe que tiver a implementação de uma interface, tera
 que ter os comportamentos(métodos/funções) que a interface tem
*/
class Cachorro implements Canino, Mamifero {
  public function respirar(): string {
    return "Irei usar oxigênio!<br>";
  }

  public function latir(): string {
    return "Latido canino!<br>";
  }

  public function mamar(): string {
    return "Tem que mamar para sobreviver!<br>";
  }

  public function correr(): string {
    return 'Vrummmm!<br>';
  }
}

$animal = new Cachorro();
echo $animal->respirar();
echo $animal->latir();
echo $animal->mamar();
echo $animal->correr();

echo '<br>';
var_dump($animal);

echo '<br>';
// retorna true se o objeto for uma instância da classe
var_dump($animal instanceof Cachorro);

// retorna true, pois o objeto animal tem todos os métodos da interface Canino
var_dump($animal instanceof Canino);

// retorna true, o objeto pois animal tem todos os métodos da interface Mamifero
var_dump($animal instanceof Mamifero);

// retorna true, pois o objeto animal tem todos os métodos da interface Animal
var_dump($animal instanceof Animal);

// retorna false, pois cachorro não implementa a interface Felino
var_dump($animal instanceof Felino);

