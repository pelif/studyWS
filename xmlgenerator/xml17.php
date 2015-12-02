<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

$livros = new SimpleXMLElement($origem, null, true);

$dom = new DOMDocument();
$node = dom_import_simplexml($livros);
$node = $dom->importNode($node, true);
$dom->appendChild($node);

$xpath = new DOMXPath($dom);

$query = "//livros/livro[@isbn = '857827069x']/titulo";

$results = $xpath->query($query);

$node = $results->item(0);

$child = $node->childNodes->item(0);
$child->data = 'Billy Jean'; 

header('Content-type: text/xml; charset=UTF-8');
echo $dom->saveXML();
