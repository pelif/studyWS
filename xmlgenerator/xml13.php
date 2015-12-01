<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

$dom = new DOMDocument(null, 'UTF-8');
$dom->load($origem);

$xpath = new DOMXPath($dom);

$query = "//livros/livro[@isbn = '857827069x']/titulo";

$results = $xpath->query($query);

$node = $results->item(0);

$child = $node->childNodes->item(0);
$node->removeChild($child);

$textNode = $dom->createTextNode('A volta dos que não foram');
$node->appendChild($textNode);

header('Content-type: text/xml; charset=UTF-8');
echo $dom->saveXML();
