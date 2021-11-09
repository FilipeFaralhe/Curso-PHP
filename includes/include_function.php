<h1 class="title-panel">Include Função</h1>

<?php
echo "Carregando include_function<br>";

function carregarArquivo() {
    include('include_file.php');

    echo "valor da variável '{$variavel}' <br>";
    echo somaInclude(2, 5) . '<br>';
}

// echo somaInclude(2, 5); erro! pois a função estão disponível somente dentro da função 'carregarArquivo' ou depois de chama-lá.
// echo "Variável = '{$variavel}'<br>"; erro1 pois a linha entenderá como uma variável nova sem definição
carregarArquivo();
echo somaInclude(2, 8); // permitido

