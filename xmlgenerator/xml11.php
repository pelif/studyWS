<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros.xml';

$dom = new DOMDocument(null, 'UTF-8');
$dom->load($origem);

$nodeList = $dom->getElementsByTagName('livro');

foreach($nodeList as $index => $node)
{
  if ($node->getAttribute('isbn') == '857827069x')
  {
    $parentNode = $nodeList->item($index)->parentNode;

    $parentNode->removeChild($nodeList->item($index));
  }
}

header('Content-type: text/xml; charset=UTF-8');
echo $dom->saveXML();