<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

define('EOL', "<br>\n");
define('TAB', "-\t");

$livros = new SimpleXMLElement($origem, null, true);

header('Content-type: text/html; charset=UTF-8');

foreach ($livros->children() as $child)
{
  echo $child->getName() . EOL;

  // Obtendo os atributos do elemento filho
  foreach ($child->attributes() as $attr)
  {
    echo TAB . $attr->getName() . ' = '  . $attr . EOL;
  }

  // Obtendo os filhos do filho
  foreach ($child->children() as $subchild)
  {
    echo TAB . $subchild->getName() . ' = ' . $subchild . EOL;
  }
}