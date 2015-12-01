<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

define('EOL', "<br>\n");

$dom = new DOMDocument(null, 'UTF-8');
$dom->load($origem);

$livro = $dom->createElement('livro');
$livro->setAttribute('isbn', '76549877895');

$newnode = $dom->createElement('titulo', 'Java 8');
$livro->appendChild($newnode);

$newnode = $dom->createElement('autor', 'Cinthia Mellon');
$livro->appendChild($newnode);

$newnode = $dom->createElement('editora', 'Novatec');
$livro->appendChild($newnode);

$livros = $dom->getElementsByTagName('livros');

$livros->item(0)->appendChild($livro);

header('Content-type: text/xml; charset=UTF-8');
echo $dom->saveXML();