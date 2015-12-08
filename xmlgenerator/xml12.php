<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

$dom = new DOMDocument(null, 'UTF-8');
$dom->load($origem);

$xpath = new DOMXPath($dom);

$query = "//livros/livro[@isbn = '8532511015']";

$results = $xpath->query($query);

$parentNode = $results->item(0)->parentNode;

$parentNode->removeChild($results->item(0));

header('Content-type: text/xml; charset=UTF-8');
echo $dom->saveXML();
