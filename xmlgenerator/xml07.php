<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros.xml';

define('EOL', "<br>\n");

$livros = new SimpleXMLElement($origem, null, true);

header('Content-type: text/html; charset=UTF-8');

// Procura o elemento a partir da raiz
$resultados = $livros->xpath('/livros/livro/titulo');
foreach ($resultados as $titulo)
{
  echo $titulo . EOL;
}