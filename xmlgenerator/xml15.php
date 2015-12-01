<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

define('EOL', "<br>\n");

$dom = new DOMDocument(null, 'UTF-8');
$dom->load($origem);

$livros = simplexml_import_dom($dom);

header('Content-type: text/html; charset=UTF-8');

// Procura o elemento a partir da raiz
$resultados = $livros->xpath('/livros/livro/titulo');
foreach ($resultados as $titulo)
{
  echo $titulo . EOL;
}
