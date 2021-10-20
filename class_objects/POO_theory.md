<h1>Pilares de programação orientada a objetos</h1>
<hr>
<b><u>Encapsulamento</u></b>

Encapsular os dados de uma aplicação significa evitar que estes sofram acessos indevidos. Para isso, é criada uma estrutura que contém métodos que podem ser utilizados por qualquer outra classe, sem causar inconsistências no desenvolvimento de um código.
Na prática, isso é feito por meio de dois métodos: os getters e os setters. O primeiro tem por objetivo retornar o valor que lhe foi pedido, mas de forma a não prejudicar a integridade do dado em si.
Já o segundo recebe como argumento uma informação, que pode ser qualquer tipo de dados suportados pela linguagem. Dessa forma, não haverá o risco de ocorrerem acessos indevidos.

<b><u>Modificadores de Acesso</u></b>

<b>Public:</b> Com este modificador, o acesso é livre em qualquer lugar do programa.<br>

<b>Protected:</b> Com este modificador, apenas a classe que contém o modificador e os tipos derivados(heranças) desta classe tem o acesso.<br>

<b>Private:</b> Com este modificador, o acesso é permitido somente dentro da classe onde ele foi declarado. Por padrão, é a visibilidade definida para métodos e atributos em uma classe.

<b><u>Heranças</u></b>

Na Programação Orientada a Objetos o significado de herança tem o mesmo significado para o mundo real. Assim como um filho pode herdar alguma característica do pai, na Orientação a Objetos é permitido que uma classe herda atributos e métodos da outra, tendo apenas uma restrição para a herança. Os modificadores de acessos das classes, métodos e atributos só podem estar com visibilidade <b><u>public</u></b> e <b><u>protected</u></b> para que sejam herdados.
Uma das grandes vantagens de usar o recurso da herança é na reutilização do código. Esse reaproveitamento pode ser acionado quando se identifica que o atributo ou método de uma classe será igual para as outras.

<b><u>Polimorfismo</u></b>

Com o Polimorfismo, os mesmos atributos e objetos podem ser utilizados em objetos distintos, porém, com implementações lógicas diferentes.
Por exemplo: podemos assumir que uma bola de futebol e uma camisa da seleção brasileira são artigos esportivos, mas que o cálculo deles em uma venda é calculado de formas diferentes.
Outro exemplo: podemos dizer que uma classe chamada Vendedor e outra chamada Diretor podem ter como base uma classe chamada Pessoa, com um método chamado CalcularVendas. Se este método (definido na classe base) se comportar de maneira diferente para as chamadas feitas a partir de uma instância de Vendedor e para as chamadas feitas a partir de uma instância de Diretor, ele será considerado um método polimórfico, ou seja, um método de várias formas.

<h2>Algumas funcionalidades de POO</h2>
<hr>
<b><u>Interface</u></b>

Interfaces são um conceito da programação orientada a objetos que tem a ver com o comportamento esperado para uma ou um conjunto de classes.
Interfaces definem o que uma classe deve fazer e não como. Assim, interfaces não possuem a implementação de métodos pois apenas declaram o conjunto de métodos, o comportamento que uma ou um conjunto de classes deve ter.
Na interface, todos os métodos são portanto abstratos e públicos, já que são apenas declarados na interface sendo obrigatoriamente implementados pelas classes que implementam a interface.
