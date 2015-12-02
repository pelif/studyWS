<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

define('EOL', "<br>\n");

$livros = new SimpleXMLElement($origem, null, true);

$livro = $livros->addChild('livro');
$livro->addAttribute('isbn', '8575421132');
$livro->addChild('titulo', 'O Codigo Morse');
$livro->addChild('autor', 'Dan Brown');
$livro->addChild('editora', 'Arqueiro');

header('Content-type: text/xml; charset=UTF-8');
echo $livros->asXML();