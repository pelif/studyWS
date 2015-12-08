<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

$books = new SimpleXMLElement($origem, null, true);

$books->saveXML("books.xml");

print $books->asXML();


?>
