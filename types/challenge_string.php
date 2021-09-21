<h1 class="title-panel">Desafio String</h1>

<?php
/*
 *  Enunciado:
 * Avaliando os métodos da documentação da string, qual o método que a
 * posição do text 'abc' na string '!AbcaBcabc' retorna 1?
 * */

// Encontra a primeiro ocorrência e retorna a posição dela, nessa caso 0 7 sera retornado
echo strpos('!AbcaBcabc', 'abc'), '<br>';

// Econtra a primeira ocorrência ignorando o case-insensitive, retornando 1
echo stripos('!AbcaBcabc', ucfirst('abc'));